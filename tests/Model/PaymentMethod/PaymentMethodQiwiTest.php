<?php

namespace Tests\Testottest\Model\PaymentMethod;

use Testottest\Model\PaymentMethod\PaymentMethodQiwi;
use Testottest\Model\PaymentMethodType;

class PaymentMethodQiwiTest extends AbstractPaymentMethodTest
{
    /**
     * @return PaymentMethodQiwi
     */
    protected function getTestInstance()
    {
        return new PaymentMethodQiwi();
    }

    /**
     * @return string
     */
    protected function getExpectedType()
    {
        return PaymentMethodType::QIWI;
    }
}
