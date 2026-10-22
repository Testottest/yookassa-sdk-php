<?php

namespace Tests\Testottest\Request\Payments;

use Testottest\Request\Payments\PaymentResponse;

class PaymentResponseTest extends AbstractPaymentResponseTest
{
    protected function getTestInstance($options)
    {
        return new PaymentResponse($options);
    }
}
