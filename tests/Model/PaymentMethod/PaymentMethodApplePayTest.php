<?php

namespace Tests\Testottest\Model\PaymentMethod;

use Testottest\Model\PaymentMethod\PaymentMethodApplePay;
use Testottest\Model\PaymentMethodType;

class PaymentMethodApplePayTest extends AbstractPaymentMethodTest
{
    /**
     * @return PaymentMethodApplePay
     */
    protected function getTestInstance()
    {
        return new PaymentMethodApplePay();
    }

    /**
     * @return string
     */
    protected function getExpectedType()
    {
        return PaymentMethodType::APPLE_PAY;
    }
}
