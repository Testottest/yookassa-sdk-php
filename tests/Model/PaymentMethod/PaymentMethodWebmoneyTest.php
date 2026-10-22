<?php

namespace Tests\Testottest\Model\PaymentMethod;

use Testottest\Model\PaymentMethod\PaymentMethodWebmoney;
use Testottest\Model\PaymentMethodType;

class PaymentMethodWebmoneyTest extends AbstractPaymentMethodTest
{
    /**
     * @return PaymentMethodWebmoney
     */
    protected function getTestInstance()
    {
        return new PaymentMethodWebmoney();
    }

    /**
     * @return string
     */
    protected function getExpectedType()
    {
        return PaymentMethodType::WEBMONEY;
    }
}
