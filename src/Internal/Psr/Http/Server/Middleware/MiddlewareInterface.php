<?php

namespace App\Internal\Psr\Http\Server\Middleware;


use App\Internal\Psr\Http\Handler\RequestHandlerInterface;
use App\Internal\Psr\Http\Message\ResponseInterface;
use App\Internal\Psr\Http\Message\ServerRequestInterface;

/**
 * A Middleware is a an individual component that can participate to the process of
 * response creation from incoming request
 *
 * It May create and return a response without delegating it to the request handler if
 * the sufficient conditions are met
 *
 * A Middleware component must implement this interface
 *
 * process a server http request and response
 *
 * Can act on the request and generate a response
 * Can forward the request to a subsequent middleware and can act on its response
 */
interface MiddlewareInterface
{
    /**
     * Process the server Request and return Http Response if possible
     *
     * If not, delegate to the response handler to generate a response
     *
     * @param ServerRequestInterface $request
     * @param  RequestHandlerInterface $requestHandler
     * @return ResponseInterface
     */
    public function  process(
        ServerRequestInterface $request,
        RequestHandlerInterface $requestHandler
    ): ResponseInterface;
}