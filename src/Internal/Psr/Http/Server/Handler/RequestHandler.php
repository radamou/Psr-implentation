<?php

namespace App\Internal\Psr\Http\Handler;

use App\Internal\Psr\Http\Message\ResponseInterface;
use App\Internal\Psr\Http\Message\ServerRequestInterface;

/**
 * @inheritdoc
 */
class RequestHandler implements RequestHandlerInterface
{

    /**
     * @inheritdoc
     */
    public function handle(ServerRequestInterface $serverRequest): ResponseInterface
    {
        // TODO: Implement handle() method.
    }
}