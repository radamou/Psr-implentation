<?php

namespace App\Internal\Psr\Http\Message\Request;

use App\Internal\Psr\Http\Message\Uri\UriInterface;

interface RequestFactoryInterface
{
    /**
     * Create a new request.
     *
     * @param string $method The HTTP method associated with the request.
     * @param UriInterface|string $uri The URI associated with the request.
     *
     * @return RequestInterface
     */
    public function createRequest(string $method, $uri): RequestInterface;

}