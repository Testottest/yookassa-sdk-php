<?php

namespace Tests\testottest\Model\Confirmation;

use testottest\Model\Confirmation\ConfirmationExternal;
use testottest\Model\ConfirmationType;


class ConfirmationExternalTest extends AbstractConfirmationTest
{
    /**
     * @return ConfirmationExternal
     */
    protected function getTestInstance()
    {
        return new ConfirmationExternal();
    }

    /**
     * @return string
     */
    protected function getExpectedType()
    {
        return ConfirmationType::EXTERNAL;
    }
}
