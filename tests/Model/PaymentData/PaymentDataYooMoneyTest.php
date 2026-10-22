<?php

namespace Tests\Testottest\Model\PaymentData;

use Testottest\Model\PaymentData\PaymentDataYooMoney;
use Testottest\Model\PaymentMethodType;

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
