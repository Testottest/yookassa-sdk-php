<?php

namespace Tests\testottest\Request\Payments\Payment;

use Tests\testottest\Request\Payments\AbstractPaymentResponseTest;
use testottest\Request\Payments\Payment\CreateCaptureResponse;

class CreateCaptureResponseTest extends AbstractPaymentResponseTest
{
    protected function getTestInstance($options)
    {
        return new CreateCaptureResponse($options);
    }
}
