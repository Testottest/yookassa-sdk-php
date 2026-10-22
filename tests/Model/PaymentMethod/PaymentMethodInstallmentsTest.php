<?php

namespace Tests\Testottest\Model\PaymentMethod;

use Testottest\Model\PaymentMethod\PaymentMethodInstallments;
use Testottest\Model\PaymentMethodType;

class PaymentMethodInstallmentsTest extends AbstractPaymentMethodTest
{
    /**
     * @return PaymentMethodInstallments
     */
    protected function getTestInstance()
    {
        return new PaymentMethodInstallments();
    }

    /**
     * @return string
     */
    protected function getExpectedType()
    {
        return PaymentMethodType::INSTALLMENTS;
    }
}
