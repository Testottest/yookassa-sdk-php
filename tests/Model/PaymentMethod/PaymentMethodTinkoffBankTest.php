<?php


namespace Tests\YooKassa\Model\PaymentMethod;


use testottest\Model\PaymentMethod\AbstractPaymentMethod;
use testottest\Model\PaymentMethod\PaymentMethodTinkoffBank;
use testottest\Model\PaymentMethodType;

class PaymentMethodTinkoffBankTest extends AbstractPaymentMethodTest
{

    /**
     * @return AbstractPaymentMethod
     */
    protected function getTestInstance()
    {
        return new PaymentMethodTinkoffBank();
    }

    /**
     * @return string
     */
    protected function getExpectedType()
    {
        return PaymentMethodType::TINKOFF_BANK;
    }
}
