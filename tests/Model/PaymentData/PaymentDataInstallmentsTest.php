<?php

namespace Tests\testottest\Model\PaymentData;

use testottest\Model\PaymentData\PaymentDataInstallments;
use testottest\Model\PaymentMethodType;

class PaymentDataInstallmentsTest extends AbstractPaymentDataTest
{
    /**
     * @return PaymentDataInstallments
     */
    protected function getTestInstance()
    {
        return new PaymentDataInstallments();
    }

    /**
     * @return string
     */
    protected function getExpectedType()
    {
        return PaymentMethodType::INSTALLMENTS;
    }
}
