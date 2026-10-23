<?php

namespace Tests\YooKassa\Model\PaymentData;

use testottest\Model\PaymentData\PaymentDataSbp;
use testottest\Model\PaymentMethodType;

class PaymentDataSbpTest extends AbstractPaymentDataTest
{
    /**
     * @return PaymentDataSbp
     */
    protected function getTestInstance()
    {
        return new PaymentDataSbp();
    }

    /**
     * @return string
     */
    protected function getExpectedType()
    {
        return PaymentMethodType::SBP;
    }
}
