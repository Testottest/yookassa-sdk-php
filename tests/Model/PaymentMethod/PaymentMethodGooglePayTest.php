<?php

namespace Tests\testottest\Model\PaymentMethod;

use testottest\Model\PaymentMethod\PaymentMethodGooglePay;
use testottest\Model\PaymentMethodType;

class PaymentMethodGooglePayTest extends AbstractPaymentMethodTest
{
    /**
     * @return PaymentMethodGooglePay
     */
    protected function getTestInstance()
    {
        return new PaymentMethodGooglePay();
    }

    /**
     * @return string
     */
    protected function getExpectedType()
    {
        return PaymentMethodType::GOOGLE_PAY;
    }
}
