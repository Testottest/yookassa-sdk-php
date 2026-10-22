<?php

namespace Tests\Testottest\Model\ConfirmationAttributes;

use Testottest\Model\ConfirmationAttributes\ConfirmationAttributesCodeVerification;
use Testottest\Model\ConfirmationType;

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
