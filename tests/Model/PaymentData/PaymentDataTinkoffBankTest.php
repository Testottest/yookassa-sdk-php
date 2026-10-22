<?php


namespace Tests\Testottest\Model\PaymentData;


use Testottest\Model\PaymentData\AbstractPaymentData;
use Testottest\Model\PaymentData\PaymentDataTinkoffBank;
use Testottest\Model\PaymentMethodType;

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
