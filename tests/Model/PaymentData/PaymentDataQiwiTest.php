<?php

namespace Tests\Testottest\Model\PaymentData;

use Testottest\Model\PaymentData\PaymentDataQiwi;
use Testottest\Model\PaymentMethodType;

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
