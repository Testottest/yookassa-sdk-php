<?php

namespace Tests\Testottest\Model\PaymentMethod;

use Testottest\Model\PaymentMethod\PaymentMethodWechat;
use Testottest\Model\PaymentMethodType;

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
