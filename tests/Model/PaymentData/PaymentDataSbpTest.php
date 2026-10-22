<?php

namespace Tests\Testottest\Model\PaymentData;

use Testottest\Model\PaymentData\PaymentDataSbp;
use Testottest\Model\PaymentMethodType;

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
