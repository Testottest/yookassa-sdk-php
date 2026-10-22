<?php

namespace Tests\Testottest\Model\PaymentData;

use Testottest\Model\PaymentData\PaymentDataMobileBalance;
use Testottest\Model\PaymentMethodType;

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
