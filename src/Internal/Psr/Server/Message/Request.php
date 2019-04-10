<?php

namespace App\Internal\Psr\Server\Message;

class Request implements ServerRequestInterface
{
    private $headers;

    /**
     *  set Host header from the provided URI
     */
    public function __construct()
    {
    }

    /**
     * @inheritdoc
     */
    public function withHeader(string $header, string $value): ServerRequestInterface
    {
        //assert that the header name and value are string

        //keep the same header format (sensitive or insensitve)

        // TODO: Implement withHeader() method.
    }

    /**
     * @inheritdoc
     */
    public function getHeaderLine(string $header): string
    {
        //assert header is a string

        //transform the param to lowercase, transform header keys values to lowercase
        //compare the keys and retrieve the good one

        //get header value by it's name

        // TODO: Implement getHeaderLine() method.
    }

    /**
     * @inheritdoc
     */
    public function withUri(UriInterface $uri): string
    {
        // TODO: Implement withUri() method.
    }

    /**
     * @inheritdoc
     */
    public function getHeader(): array
    {
        // TODO: Implement getHeader() method.
    }

    /**
     * @inheritdoc
     */
    public function getHeaders(): array
    {
        // TODO: Implement getHeaders() method.
    }
}