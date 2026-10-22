<?php

namespace Tests\testottest\Model\PaymentMethod;

use testottest\Model\PaymentMethod\PaymentMethodSbp;
use testottest\Model\PaymentMethodType;

class PaymentMethodSbpTest extends AbstractPaymentMethodTest
{
    /**
     * @return PaymentMethodSbp
     */
    protected function getTestInstance()
    {
        return new PaymentMethodSbp();
    }

    /**
     * @return string
     */
    protected function getExpectedType()
    {
        return PaymentMethodType::SBP;
    }
}
