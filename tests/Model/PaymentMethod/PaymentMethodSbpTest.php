<?php

namespace Tests\Testottest\Model\PaymentMethod;

use Testottest\Model\PaymentMethod\PaymentMethodSbp;
use Testottest\Model\PaymentMethodType;

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
