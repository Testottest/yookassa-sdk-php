<?php

namespace Tests\Testottest\Request\Payments\Payment;

use Tests\Testottest\Request\Payments\AbstractPaymentResponseTest;
use Testottest\Request\Payments\Payment\CreateCaptureResponse;

class CreateCaptureResponseTest extends AbstractPaymentResponseTest
{
    protected function getTestInstance($options)
    {
        return new CreateCaptureResponse($options);
    }
}
