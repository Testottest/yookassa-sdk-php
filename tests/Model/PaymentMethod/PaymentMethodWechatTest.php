<?php

namespace Tests\testottest\Model\PaymentMethod;

use testottest\Model\PaymentMethod\PaymentMethodWechat;
use testottest\Model\PaymentMethodType;

class PaymentMethodWechatTest extends AbstractPaymentMethodTest
{
    /**
     * @return PaymentMethodWechat
     */
    protected function getTestInstance()
    {
        return new PaymentMethodWechat();
    }

    /**
     * @return string
     */
    protected function getExpectedType()
    {
        return PaymentMethodType::WECHAT;
    }
}
