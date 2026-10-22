<?php

namespace Tests\Testottest\Request\Payments\Payment;

use Tests\Testottest\Request\Payments\AbstractPaymentResponseTest;
use Testottest\Request\Payments\Payment\CancelResponse;

class CancelResponseTest extends AbstractPaymentResponseTest
{
    protected function getTestInstance($options)
    {
        return new CancelResponse($options);
    }
}
