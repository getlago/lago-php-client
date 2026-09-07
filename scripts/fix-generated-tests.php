<?php
// OpenAPI Generator 7.14 emits duplicate test() methods for webhook operations.
// Recover the unique operation name already present in each generated docblock.
$path = __DIR__ . '/../test/Api/DefaultApiTest.php';
$source = file_get_contents($path);
$patched = preg_replace_callback(
    '/(\* Test case for (\w+).*?public function )test\(\)/s',
    static fn(array $match): string => $match[1] . 'test' . ucfirst($match[2]) . '()',
    $source
);
if ($patched === null) {
    throw new RuntimeException('Unable to repair generated webhook test names');
}
if ($patched !== $source) {
    file_put_contents($path, $patched);
}
