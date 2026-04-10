<?php
/**
 * LagoRateLimitException
 * PHP version 8.1
 *
 * @category Class
 * @package  Lago\LagoPhpClient
 * @author   Lago Tech
 * @link     https://www.getlago.com
 */

namespace Lago\LagoPhpClient;

/**
 * LagoRateLimitException Class Doc Comment
 *
 * Exception thrown when API rate limit (HTTP 429) is exceeded.
 * Contains rate limit header information for automatic retry strategies.
 *
 * @category Class
 * @package  Lago\LagoPhpClient
 * @author   Lago Tech
 * @link     https://www.getlago.com
 */
class LagoRateLimitException extends ApiException
{
    /**
     * The maximum number of requests allowed in the current window
     *
     * @var int|null
     */
    private $rateLimitLimit;

    /**
     * The number of remaining requests in the current window
     *
     * @var int|null
     */
    private $rateLimitRemaining;

    /**
     * The number of seconds until the rate limit window resets
     *
     * @var int|null
     */
    private $rateLimitReset;

    /**
     * Constructor
     *
     * @param string                $message              Error message
     * @param int                   $code                 HTTP status code (should be 429)
     * @param string[][]|null       $responseHeaders      HTTP response headers
     * @param \stdClass|string|null $responseBody         HTTP decoded body of the server response
     * @param int|null              $rateLimitLimit       Max requests per window
     * @param int|null              $rateLimitRemaining   Remaining requests in current window
     * @param int|null              $rateLimitReset       Seconds until window resets
     */
    public function __construct(
        $message = "",
        $code = 429,
        $responseHeaders = [],
        $responseBody = null,
        $rateLimitLimit = null,
        $rateLimitRemaining = null,
        $rateLimitReset = null
    ) {
        parent::__construct($message, $code, $responseHeaders, $responseBody);
        $this->rateLimitLimit = $rateLimitLimit;
        $this->rateLimitRemaining = $rateLimitRemaining;
        $this->rateLimitReset = $rateLimitReset;
    }

    /**
     * Gets the rate limit maximum
     *
     * @return int|null
     */
    public function getRateLimitLimit()
    {
        return $this->rateLimitLimit;
    }

    /**
     * Gets the remaining requests in current window
     *
     * @return int|null
     */
    public function getRateLimitRemaining()
    {
        return $this->rateLimitRemaining;
    }

    /**
     * Gets the seconds until rate limit window resets
     *
     * @return int|null
     */
    public function getRateLimitReset()
    {
        return $this->rateLimitReset;
    }
}
