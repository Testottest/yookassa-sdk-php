<?php

namespace Tests\Testottest\Model\PaymentMethod;

use Testottest\Model\PaymentMethod\PaymentMethodCash;
use Testottest\Model\PaymentMethodType;

class PaymentMethodCashTest extends AbstractPaymentMethodTest
{
    /**
     * @return PaymentMethodCash
     */
    protected function getTestInstance()
    {
        return new PaymentMethodCash();
    }

    /**
     * @return string
     */
    protected function getExpectedType()
    {
        return PaymentMethodType::CASH;
    }
}
