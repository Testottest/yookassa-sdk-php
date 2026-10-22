<?php


namespace Tests\testottest\Model\PaymentData;


use testottest\Model\PaymentData\AbstractPaymentData;
use testottest\Model\PaymentData\PaymentDataTinkoffBank;
use testottest\Model\PaymentMethodType;

class PaymentDataTinkoffBankTest extends AbstractPaymentDataTest
{

    /**
     * @return AbstractPaymentData
     */
    protected function getTestInstance()
    {
        return new PaymentDataTinkoffBank();
    }

    /**
     * @return string
     */
    protected function getExpectedType()
    {
        return PaymentMethodType::TINKOFF_BANK;

    }
}
