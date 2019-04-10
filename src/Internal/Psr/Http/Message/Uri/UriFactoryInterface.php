<?php

namespace App\Internal\Psr\Http\Message\Uri;

interface UriFactoryInterface
{
    /**
     * Create a new URI.
     *
     * @param string $uri The URI to parse.
     *
     * @throws \InvalidArgumentException If the given URI cannot be parsed.
     *
     * @return UriInterface
     */
    public function createUri(string $uri = '') : UriInterface;
}