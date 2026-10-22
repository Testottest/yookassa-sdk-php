<?php

namespace Tests\Testottest\Common\Exceptions;

use Testottest\Common\Exceptions\TooManyRequestsException;

class TooManyRequestsExceptionTest extends AbstractApiRequestExceptionTest
{
    public function getTestInstance($message = '', $code = 0, $responseHeaders = [], $responseBody = null)
    {
        return new TooManyRequestsException($responseHeaders, $responseBody);
    }

    public function expectedHttpCode()
    {
        return TooManyRequestsException::HTTP_CODE;
    }
}
