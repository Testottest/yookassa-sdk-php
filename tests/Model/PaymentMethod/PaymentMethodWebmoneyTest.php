<?php

namespace Tests\YooKassa\Model\PaymentMethod;

use testottest\Model\PaymentMethod\PaymentMethodWebmoney;
use testottest\Model\PaymentMethodType;

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
