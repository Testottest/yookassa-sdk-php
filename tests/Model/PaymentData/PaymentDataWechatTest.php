<?php

namespace Tests\Testottest\Model\PaymentData;

use Testottest\Model\PaymentData\PaymentDataWechat;
use Testottest\Model\PaymentMethodType;

class PaymentDataWechatTest extends AbstractPaymentDataTest
{
    /**
     * @return PaymentDataWechat
     */
    protected function getTestInstance()
    {
        return new PaymentDataWechat();
    }

    /**
     * @return string
     */
    protected function getExpectedType()
    {
        return PaymentMethodType::WECHAT;
    }
}
