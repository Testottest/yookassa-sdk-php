<?php

namespace Tests\testottest\Model\PaymentData;

use testottest\Model\PaymentData\PaymentDataQiwi;
use testottest\Model\PaymentMethodType;

class PaymentDataQiwiTest extends AbstractPaymentDataPhoneTest
{
    /**
     * @return PaymentDataQiwi
     */
    protected function getTestInstance()
    {
        return new PaymentDataQiwi();
    }

    /**
     * @return string
     */
    protected function getExpectedType()
    {
        return PaymentMethodType::QIWI;
    }
}
