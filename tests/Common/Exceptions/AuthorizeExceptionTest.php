<?php

namespace Tests\YooKassa\Common\Exceptions;

use testottest\Common\Exceptions\AuthorizeException;

class AuthorizeExceptionTest extends ApiExceptionTest
{
    public function getTestInstance($message = '', $code = 0, $responseHeaders = array(), $responseBody = null)
    {
        return new AuthorizeException($message, $code, $responseHeaders, $responseBody);
    }
}
