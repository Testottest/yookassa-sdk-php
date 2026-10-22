<?php

namespace Tests\testottest\Model\Confirmation;

use testottest\Model\Confirmation\ConfirmationCodeVerification;
use testottest\Model\ConfirmationType;

class ConfirmationCodeVerificationTest extends AbstractConfirmationTest
{
    /**
     * @return ConfirmationCodeVerification
     */
    protected function getTestInstance()
    {
        return new ConfirmationCodeVerification();
    }

    /**
     * @return string
     */
    protected function getExpectedType()
    {
        return ConfirmationType::CODE_VERIFICATION;
    }
}
