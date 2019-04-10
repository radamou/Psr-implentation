<?php

namespace App\Internal\Psr\Server\Http;

use App\Internal\Psr\Server\Message\ResponseInterface;
use App\Internal\Psr\Server\Message\ServerRequestInterface;

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