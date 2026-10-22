<?php

namespace Tests\Testottest\Model\PaymentData;

use Testottest\Model\PaymentData\PaymentDataGooglePay;
use Testottest\Model\PaymentMethodType;

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
