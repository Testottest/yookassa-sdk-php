<?php

namespace Tests\testottest\Model\PaymentData;

use testottest\Model\PaymentData\PaymentDataGooglePay;
use testottest\Model\PaymentMethodType;

class PaymentDataGooglePayTest extends AbstractPaymentDataGooglePayTest
{
    /**
     * @return PaymentDataGooglePay
     */
    protected function getTestInstance()
    {
        return new PaymentDataGooglePay();
    }

    /**
     * @return string
     */
    protected function getExpectedType()
    {
        return PaymentMethodType::GOOGLE_PAY;
    }
}
