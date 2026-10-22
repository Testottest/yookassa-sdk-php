<?php

namespace Tests\testottest\Request\Payments\Payment;

use Tests\testottest\Request\Payments\AbstractPaymentResponseTest;
use testottest\Request\Payments\Payment\CancelResponse;

class CancelResponseTest extends AbstractPaymentResponseTest
{
    protected function getTestInstance($options)
    {
        return new CancelResponse($options);
    }
}
