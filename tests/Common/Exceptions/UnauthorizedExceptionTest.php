<?php

namespace Tests\Testottest\Common\Exceptions;

use Testottest\Common\Exceptions\UnauthorizedException;

class UnauthorizedExceptionTest extends AbstractApiRequestExceptionTest
{
    public function getTestInstance($message = '', $code = 0, $responseHeaders = [], $responseBody = null)
    {
        return new UnauthorizedException($responseHeaders, $responseBody);
    }

    public function expectedHttpCode()
    {
        return UnauthorizedException::HTTP_CODE;
    }
}
