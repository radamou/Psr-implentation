<?php

namespace App\Internal\Psr\Http\Server\Middleware;

use App\Internal\Psr\Http\Handler\RequestHandlerInterface;
use App\Internal\Psr\Http\Message\ResponseInterface;
use App\Internal\Psr\Http\Message\ServerRequestInterface;

/**
 * @inheritdoc
 */
class Middleware implements MiddlewareInterface
{

    /**
     * @inheritdoc
     */
    public function process(
        ServerRequestInterface $request,
        RequestHandlerInterface $requestHandler
    ): ResponseInterface
    {
        // TODO: Implement process() method.
    }
}