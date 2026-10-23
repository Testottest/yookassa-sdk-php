<?php

namespace Tests\YooKassa\Model\ConfirmationAttributes;

use testottest\Model\ConfirmationAttributes\ConfirmationAttributesCodeVerification;
use testottest\Model\ConfirmationType;

class ConfirmationAttributesCodeVerificationTest extends AbstractConfirmationAttributesTest
{
    /**
     * @return ConfirmationAttributesCodeVerification
     */
    protected function getTestInstance()
    {
        return new ConfirmationAttributesCodeVerification();
    }

    /**
     * @return string
     */
    protected function getExpectedType()
    {
        return ConfirmationType::CODE_VERIFICATION;
    }
}
