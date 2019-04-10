<?php

namespace App\Internal\Psr\Http\Handler;


use App\Internal\Psr\Http\Message\ResponseInterface;
use App\Internal\Psr\Http\Message\ServerRequestInterface;

/**
 * Individual Component that process a request and return a response (as defined by PSR7)
 *
 * A http request Handler may throw exception if the request condition prevent it return a http response
 *
 * A http request handler must implement this interface
 */
interface RequestHandlerInterface
{
    /**
     * Handle the Htttp Request and generate Http Response
     *
     * @param ServerRequestInterface $serverRequest
     * @return ResponseInterface
     */
    public function handle(ServerRequestInterface $serverRequest): ResponseInterface;
}