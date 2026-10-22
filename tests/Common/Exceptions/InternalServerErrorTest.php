<?php

namespace Tests\Testottest\Common\Exceptions;

use Testottest\Common\Exceptions\InternalServerError;

class InternalServerErrorTest extends AbstractApiRequestExceptionTest
{
    public function getTestInstance($message = '', $code = 0, $responseHeaders = [], $responseBody = null)
    {
        return new InternalServerError($responseHeaders, $responseBody);
    }

    public function expectedHttpCode()
    {
        return InternalServerError::HTTP_CODE;
    }
}
