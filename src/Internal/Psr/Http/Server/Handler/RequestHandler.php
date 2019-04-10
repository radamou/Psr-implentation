<?php

namespace App\Internal\Psr\Http\Server\Handler;

use App\Internal\Psr\Http\Message\Request\Server\ServerRequestInterface;
use App\Internal\Psr\Http\Message\Response\ResponseInterface;

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