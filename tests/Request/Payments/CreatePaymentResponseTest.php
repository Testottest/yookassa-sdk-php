<?php

namespace Tests\Testottest\Request\Payments;

use Testottest\Request\Payments\CreatePaymentResponse;

class CreatePaymentResponseTest extends AbstractPaymentResponseTest
{
    protected function getTestInstance($options)
    {
        return new CreatePaymentResponse($options);
    }
}
