<?php
/**
 * RateLimitRetryMiddleware
 * PHP version 8.1
 *
 * @category Class
 * @package  Lago\LagoPhpClient
 * @author   Lago Tech
 * @link     https://www.getlago.com
 */

namespace Lago\LagoPhpClient;

use GuzzleHttp\Exception\RequestException;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

/**
 * RateLimitRetryMiddleware Class Doc Comment
 *
 * Guzzle middleware that handles HTTP 429 (rate limit) responses by:
 * - Parsing rate limit headers (x-ratelimit-limit, x-ratelimit-remaining, x-ratelimit-reset)
 * - Automatically retrying with appropriate backoff
 * - Using x-ratelimit-reset header if available, otherwise exponential backoff
 *
 * @category Class
 * @package  Lago\LagoPhpClient
 * @author   Lago Tech
 * @link     https://www.getlago.com
 */
class RateLimitRetryMiddleware
{
    /**
     * Maximum number of retries for rate-limited requests
     *
     * @var int
     */
    private $maxRetries;

    /**
     * Whether to enable automatic retry on rate limits
     *
     * @var bool
     */
    private $retryOnRateLimit;

    /**
     * Constructor
     *
     * @param int  $maxRetries       Maximum retries (default: 3)
     * @param bool $retryOnRateLimit Enable retry on 429 (default: true)
     */
    public function __construct($maxRetries = 3, $retryOnRateLimit = true)
    {
        $this->maxRetries = max(0, (int) $maxRetries);
        $this->retryOnRateLimit = (bool) $retryOnRateLimit;
    }

    /**
     * Returns the middleware callable
     *
     * @return callable
     */
    public function __invoke()
    {
        return function (callable $handler) {
            return function (RequestInterface $request, array $options) use ($handler) {
                // Track retry count in the request
                $retryCount = $options['lago_retry_count'] ?? 0;

                return $handler($request, $options)
                    ->then(
                        function (ResponseInterface $response) use ($request, $handler, $options, $retryCount) {
                            return $this->handleResponse($response, $request, $handler, $options, $retryCount);
                        }
                    );
            };
        };
    }

    /**
     * Handles the response and performs retry logic
     *
     * @param ResponseInterface $response    The response
     * @param RequestInterface  $request     The request
     * @param callable          $handler     The next handler in chain
     * @param array             $options     The request options
     * @param int               $retryCount  Current retry count
     *
     * @return ResponseInterface|\GuzzleHttp\Promise\PromiseInterface
     */
    private function handleResponse(
        ResponseInterface $response,
        RequestInterface $request,
        callable $handler,
        array $options,
        $retryCount
    ) {
        // Only handle 429 if retry is enabled and we haven't exceeded max retries
        if ($response->getStatusCode() !== 429 || !$this->retryOnRateLimit || $retryCount >= $this->maxRetries) {
            return $response;
        }

        // Parse rate limit headers
        $limit = null;
        $remaining = null;
        $reset = null;

        if ($response->hasHeader('x-ratelimit-limit')) {
            $limit = (int) $response->getHeaderLine('x-ratelimit-limit');
        }

        if ($response->hasHeader('x-ratelimit-remaining')) {
            $remaining = (int) $response->getHeaderLine('x-ratelimit-remaining');
        }

        if ($response->hasHeader('x-ratelimit-reset')) {
            $reset = (int) $response->getHeaderLine('x-ratelimit-reset');
        }

        // Determine wait time
        if ($reset !== null && $reset > 0) {
            // Use x-ratelimit-reset directly
            $delaySeconds = $reset;
        } else {
            // Use exponential backoff: 1s, 2s, 4s, 8s, etc.
            $delaySeconds = (2 ** $retryCount); // 1, 2, 4, 8...
        }

        // Sleep for the calculated duration
        sleep($delaySeconds);

        // Increment retry count and retry the request
        $options['lago_retry_count'] = $retryCount + 1;

        return $handler($request, $options)
            ->then(
                function (ResponseInterface $response) use ($request, $handler, $options, $retryCount) {
                    return $this->handleResponse($response, $request, $handler, $options, $retryCount + 1);
                }
            );
    }
}
