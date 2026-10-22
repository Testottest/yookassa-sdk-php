<?php

namespace Tests\Testottest\Model\PaymentData;

use Testottest\Model\PaymentData\PaymentDataSberbank;
use Testottest\Model\PaymentMethodType;

class PaymentDataSberbankTest extends AbstractPaymentDataPhoneTest
{
    /**
     * @return PaymentDataSberbank
     */
    protected function getTestInstance()
    {
        return new PaymentDataSberbank();
    }

    /**
     * @return string
     */
    protected function getExpectedType()
    {
        return PaymentMethodType::SBERBANK;
    }
}
