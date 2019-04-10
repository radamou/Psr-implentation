<?php

namespace App\Internal\Psr15\Server\Middleware;

use App\Internal\Psr\Server\Http\RequestHandlerInterface;
use App\Internal\Psr\Server\Message\ResponseInterface;
use App\Internal\Psr\Server\Message\ServerRequestInterface;

/**
 * @inheritdoc
 */
class Middleware implements MiddlewareInterface
{

    /**
     * @inheritdoc
     */
    public function process(ServerRequestInterface $request, RequestHandlerInterface $requestHandler): ResponseInterface
    {
        // TODO: Implement process() method.
    }
}