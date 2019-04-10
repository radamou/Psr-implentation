<?php

namespace App\Internal\Psr\Server\Message;

/**
 * PSR-7
 *
 * Http message (RFC 7230, 7231), URI(RFC 3986)
 *
 * A Middleware/RequestHandler that generate a response
 * will propose a prototype of PSR-7 response that implement
 * this interface or is built by using a Factory capable
 * of generating a ResponseInterface
 *
 * That way, it avoid being dependent on any kind of Http message
 *
 */
interface ResponseInterface
{

}