<?php

namespace Tests\Testottest\Model\PaymentData;

use Testottest\Model\PaymentData\PaymentDataInstallments;
use Testottest\Model\PaymentMethodType;

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
