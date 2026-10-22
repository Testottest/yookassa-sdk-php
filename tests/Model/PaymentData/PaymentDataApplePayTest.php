<?php

namespace Tests\Testottest\Model\PaymentData;

use Testottest\Model\PaymentData\PaymentDataApplePay;
use Testottest\Model\PaymentMethodType;

class PaymentDataApplePayTest extends AbstractPaymentDataApplePayTest
{
    /**
     * @return PaymentDataApplePay
     */
    protected function getTestInstance()
    {
        return new PaymentDataApplePay();
    }

    /**
     * @return string
     */
    protected function getExpectedType()
    {
        return PaymentMethodType::APPLE_PAY;
    }
}
