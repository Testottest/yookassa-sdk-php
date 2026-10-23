<?php

namespace Tests\YooKassa\Model\PaymentData;

use testottest\Model\PaymentData\PaymentDataMobileBalance;
use testottest\Model\PaymentMethodType;

class PaymentDataMobileBalanceTest extends AbstractPaymentDataPhoneTest
{
    /**
     * @return PaymentDataMobileBalance
     */
    protected function getTestInstance()
    {
        return new PaymentDataMobileBalance();
    }

    /**
     * @return string
     */
    protected function getExpectedType()
    {
        return PaymentMethodType::MOBILE_BALANCE;
    }
}
