<?php

namespace Tests\Testottest\Common\Exceptions;

use Testottest\Common\Exceptions\EmptyPropertyValueException;

class EmptyPropertyValueExceptionTest extends InvalidPropertyExceptionTest
{
    /**
     * @param string $message
     * @param string $property
     * @return EmptyPropertyValueException
     */
    protected function getTestInstance($message, $property)
    {
        return new EmptyPropertyValueException($message, 0, $property);
    }
}
