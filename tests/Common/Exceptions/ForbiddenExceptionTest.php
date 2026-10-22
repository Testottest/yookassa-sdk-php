<?php

namespace Tests\Testottest\Common\Exceptions;

use Testottest\Common\Exceptions\ForbiddenException;

class ForbiddenExceptionTest extends AbstractApiRequestExceptionTest
{
    public function getTestInstance($message = '', $code = 0, $responseHeaders = [], $responseBody = null)
    {
        return new ForbiddenException($responseHeaders, $responseBody);
    }

    public function expectedHttpCode()
    {
        return ForbiddenException::HTTP_CODE;
    }
}
