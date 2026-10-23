<?php

namespace Tests\YooKassa\Request\Payments;

use testottest\Request\Payments\PaymentResponse;

class PaymentResponseTest extends AbstractPaymentResponseTest
{
    protected function getTestInstance($options)
    {
        return new PaymentResponse($options);
    }
}
