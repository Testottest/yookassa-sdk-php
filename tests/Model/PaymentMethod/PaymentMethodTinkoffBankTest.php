<?php


namespace Tests\Testottest\Model\PaymentMethod;


use Testottest\Model\PaymentMethod\AbstractPaymentMethod;
use Testottest\Model\PaymentMethod\PaymentMethodTinkoffBank;
use Testottest\Model\PaymentMethodType;

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
