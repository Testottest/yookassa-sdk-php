<?php

namespace Tests\testottest\Model\PaymentMethod;

use testottest\Model\PaymentMethod\PaymentMethodMobileBalance;
use testottest\Model\PaymentMethodType;

class PaymentMethodMobileBalanceTest extends AbstractPaymentMethodPhoneTest
{
    /**
     * @return PaymentMethodMobileBalance
     */
    protected function getTestInstance()
    {
        return new PaymentMethodMobileBalance();
    }

    /**
     * @return string
     */
    protected function getExpectedType()
    {
        return PaymentMethodType::MOBILE_BALANCE;
    }
}
