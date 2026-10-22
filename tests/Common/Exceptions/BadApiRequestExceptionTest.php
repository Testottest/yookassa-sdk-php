<?php

namespace Tests\Testottest\Common\Exceptions;

use Testottest\Common\Exceptions\BadApiRequestException;

class BadApiRequestExceptionTest extends AbstractApiRequestExceptionTest
{
    public function getTestInstance($message = '', $code = 0, $responseHeaders = [], $responseBody = null)
    {
        return new BadApiRequestException($responseHeaders, $responseBody);
    }

    public function expectedHttpCode()
    {
        return BadApiRequestException::HTTP_CODE;
    }
}
