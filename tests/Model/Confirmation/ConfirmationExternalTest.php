<?php

namespace Tests\Testottest\Model\Confirmation;

use Testottest\Model\Confirmation\ConfirmationExternal;
use Testottest\Model\ConfirmationType;


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
