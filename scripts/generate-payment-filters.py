#!/usr/bin/env python3
"""Regenerate the existing payment list operations from a bundled Lago spec.

Keep unrelated operations/models at this client's release and preserve the
existing fifth positional contentType argument. New filters can use named args.
"""
import argparse
from pathlib import Path
import re
import subprocess
import tempfile

ROOT = Path(__file__).resolve().parents[1]
IMAGE = "openapitools/openapi-generator-cli:v7.14.0"


def method_blocks(source, operation, allow_missing=False):
    blocks = {}
    for match in re.finditer(r"^    /\*\*\n.*?(?=^    /\*\*\n|\Z)", source, re.M | re.S):
        name = re.search(r"public function (\w+)\(", match[0])
        if name and name[1] in [operation + suffix for suffix in (
            "", "WithHttpInfo", "Async", "AsyncWithHttpInfo", "Request"
        )]:
            blocks[name[1]] = match
    if allow_missing and not blocks:
        return blocks
    if len(blocks) != 5:
        raise RuntimeError(f"Expected five generated methods for {operation}")
    return blocks


def preserve_content_type(block, operation):
    def reorder(match):
        args = match[2].split(", ")
        if len(args) != 19 or "$contentType" not in args[-1]:
            raise RuntimeError("Generated payment argument signature changed")
        args.insert(4, args.pop())
        return match[1] + ", ".join(args) + ")"

    block = re.sub(
        rf"(\b{operation}(?:WithHttpInfo|AsyncWithHttpInfo|Async|Request)?\()([^\n)]*)\)",
        reorder, block,
    )
    # The generator passes format: date as a string to ObjectSerializer,
    # which otherwise attempts to cast DateTime to string. Preserve date-only bounds.
    for date in ("created_at_from", "created_at_to"):
        block = block.replace(
            f"            ${date},\n            '{date}',",
            f"            ${date} instanceof \\DateTimeInterface ? ${date}->format('Y-m-d') : ${date},\n            '{date}',",
        )
        block = block.replace(f"\\DateTime|null ${date}", f"\\DateTimeInterface|string|null ${date}")
    lines = block.splitlines(keepends=True)
    content = next(i for i, line in enumerate(lines) if "@param  string $contentType" in line)
    first_filter = next(i for i, line in enumerate(lines) if "@param" in line and "$payment_status " in line)
    lines.insert(first_filter, lines.pop(content))
    return "\n".join(line.rstrip() for line in "".join(lines).splitlines()) + "\n\n"


def update(generated):
    for api, operation in [("PaymentsApi", "findAllPayments"), ("CustomersApi", "findAllCustomerPayments")]:
        path = ROOT / "lib" / "Api" / f"{api}.php"
        source = path.read_text()
        fresh = method_blocks((generated / "lib" / "Api" / f"{api}.php").read_text(), operation)
        old = method_blocks(source, operation, allow_missing=operation == "findAllCustomerPayments")
        if not old:
            marker = "    /**\n     * Create http client option"
            if marker not in source:
                raise RuntimeError("Cannot locate API method insertion point")
            source = source.replace(marker, "".join(preserve_content_type(m[0], operation) for m in fresh.values()) + marker)
            source = source.replace("    public const contentTypes = [", "    public const contentTypes = [\n        'findAllCustomerPayments' => ['application/json'],")
        for name, match in sorted(old.items(), key=lambda item: item[1].start(), reverse=True):
            source = source[:match.start()] + preserve_content_type(fresh[name][0], operation) + source[match.end():]
        if operation == "findAllCustomerPayments" and "'findAllCustomerPayments' =>" not in source:
            source = source.replace("    public const contentTypes = [", "    public const contentTypes = [\n        'findAllCustomerPayments' => ['application/json'],")
        path.write_text(source)

        doc = ROOT / "docs" / "Api" / f"{api}.md"
        pattern = rf"^## `{operation}\(\)`.*?(?=^## `|\Z)"
        fresh_doc = re.search(pattern, (generated / "docs" / "Api" / f"{api}.md").read_text(), re.M | re.S)
        if not fresh_doc:
            raise RuntimeError(f"Missing generated documentation for {operation}")
        doc_source, count = re.subn(pattern, lambda _: fresh_doc[0], doc.read_text(), flags=re.M | re.S)
        if count == 0 and not old:
            doc_source += "\n" + fresh_doc[0]
            # Include the new customer-scoped list in the generated method index.
            lines = doc_source.splitlines(keepends=True)
            table_end = next(i for i, line in enumerate(lines) if i > 4 and not line.startswith("|") and lines[i - 1].startswith("|"))
            lines.insert(table_end, f"| [**{operation}()**]({api}.md#{operation}) | **GET** /customers/{{external_customer_id}}/payments | List all customer payments |\n")
            doc_source = "".join(lines)
        elif count != 1:
            raise RuntimeError(f"Expected one existing documentation section for {operation}")
        # Generated examples omit contentType; insert its default before the new filters.
        doc_source = doc_source.replace("$invoice_id, $payment_status,", "$invoice_id, 'application/json', $payment_status,")
        doc.write_text(doc_source.rstrip() + "\n")
    subprocess.run(["php", str(ROOT / "scripts" / "fix-generated-tests.php")], check=True)


if __name__ == "__main__":
    parser = argparse.ArgumentParser(description=__doc__)
    parser.add_argument("spec", type=Path, help="Bundled lago-openapi/openapi.yaml")
    parser.add_argument("--generated", type=Path, help="Reuse an existing 7.14.0 generation directory")
    args = parser.parse_args()
    if args.generated:
        update(args.generated.resolve())
    else:
        with tempfile.TemporaryDirectory(prefix="lago-php-payments-") as directory:
            output = Path(directory)
            spec = args.spec.resolve()
            subprocess.run([
                "docker", "run", "--rm", "-v", f"{spec}:/input/openapi.yaml:ro",
                "-v", f"{output}:/output", IMAGE, "generate", "-i", "/input/openapi.yaml",
                "-g", "php", "-p", "packageName=lago-php-client,vendorName=Lago,"
                "invokerPackage=Lago\\LagoPhpClient,licenseName=MIT,gitUserId=getlago,"
                "gitRepoId=lago-php-client,artifactVersion=1.31.0,composePackageName=getlago/lago-php-client",
                "-o", "/output",
            ], check=True)
            update(output)
