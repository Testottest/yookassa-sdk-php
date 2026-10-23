<?php

namespace Tests\YooKassa\Model\PaymentMethod;

use testottest\Model\PaymentMethod\PaymentMethodInstallments;
use testottest\Model\PaymentMethodType;

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
