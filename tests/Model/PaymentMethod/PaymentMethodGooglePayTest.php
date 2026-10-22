<?php

namespace Tests\Testottest\Model\PaymentMethod;

use Testottest\Model\PaymentMethod\PaymentMethodGooglePay;
use Testottest\Model\PaymentMethodType;

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
