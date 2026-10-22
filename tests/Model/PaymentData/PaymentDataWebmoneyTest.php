<?php

namespace Tests\Testottest\Model\PaymentData;

use Testottest\Model\PaymentData\PaymentDataWebmoney;
use Testottest\Model\PaymentMethodType;

class PaymentDataWebmoneyTest extends AbstractPaymentDataTest
{
    /**
     * @return PaymentDataWebmoney
     */
    protected function getTestInstance()
    {
        return new PaymentDataWebmoney();
    }

    /**
     * @return string
     */
    protected function getExpectedType()
    {
        return PaymentMethodType::WEBMONEY;
    }
}
