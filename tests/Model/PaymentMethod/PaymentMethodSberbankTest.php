<?php

namespace Tests\Testottest\Model\PaymentMethod;

use Testottest\Model\PaymentMethod\PaymentMethodSberbank;
use Testottest\Model\PaymentMethodType;

class PaymentMethodSberbankTest extends AbstractPaymentMethodPhoneTest
{
    /**
     * @return PaymentMethodSberbank
     */
    protected function getTestInstance()
    {
        return new PaymentMethodSberbank();
    }

    /**
     * @return string
     */
    protected function getExpectedType()
    {
        return PaymentMethodType::SBERBANK;
    }
}
