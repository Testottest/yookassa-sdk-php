<?php

namespace Tests\Testottest\Model\Confirmation;

use Testottest\Model\Confirmation\ConfirmationCodeVerification;
use Testottest\Model\ConfirmationType;

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
