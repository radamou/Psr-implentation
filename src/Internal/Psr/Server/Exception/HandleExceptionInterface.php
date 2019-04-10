<?php

namespace App\Internal\Psr15\Server\Exception;

/**
 * Catch exception and transform it as a response object
 *
 * This component should be the first component executed
 * to be sure that a response is always generated
 *
 */
interface HandleExceptionInterface
{

}