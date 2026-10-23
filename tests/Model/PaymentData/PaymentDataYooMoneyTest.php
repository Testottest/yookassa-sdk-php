<?php

namespace Tests\YooKassa\Model\PaymentData;

use testottest\Model\PaymentData\PaymentDataYooMoney;
use testottest\Model\PaymentMethodType;

class PaymentDataYooMoneyTest extends AbstractPaymentDataTest
{
    /**
     * @return PaymentDataYooMoney
     */
    protected function getTestInstance()
    {
        return new PaymentDataYooMoney();
    }

    /**
     * @return string
     */
    protected function getExpectedType()
    {
        return PaymentMethodType::YOO_MONEY;
    }
}
