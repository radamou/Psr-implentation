<?php

namespace App\Internal\Psr\Server\Message;

/**
 * PSR-7
 *
 * Server Request Interface to Handle Server request
 */
interface ServerRequestInterface
{
    /**
     * Set a header value (associative array)
     * include case insensitive header field names (add to lower case before setting it)
     *
     * headers are retrieved by name
     */
    public function withHeader(string $header, string $value): self;

    /**
     *
     * return the Host header by default
     */
    public function withUri(UriInterface $uri): string;

    /**
     * retrieve a header value as a string by it's name
     * include case insensitive header field names (add to lower case before getting it)
     * value like Set-Cookie can't be retrieved with this function, use getHeader instead
     *
     * headers are retrieved by name (concatenate with comma)
     *
     * @example $header contains: 'bar, baz'
     *
     */
    public function getHeaderLine(string $header): string;

    /**
     * retrieve a header value as an array by it's name
     * include case insensitive header field names (add to lower case before getting it)
     *
     * headers are retrieved by name (concatenate with comma)
     *
     * @example $header contains: ['bar, baz']
     */
    public function getHeader(): array ;

    /**
     * retrieve all headers
     */
    public function getHeaders(): array;
}