<?php

namespace Tests\Testottest\Model\ConfirmationAttributes;

use Testottest\Model\ConfirmationAttributes\ConfirmationAttributesExternal;
use Testottest\Model\ConfirmationType;

class ConfirmationAttributesExternalTest extends AbstractConfirmationAttributesTest
{
    /**
     * @return ConfirmationAttributesExternal
     */
    protected function getTestInstance()
    {
        return new ConfirmationAttributesExternal();
    }

    /**
     * @return string
     */
    protected function getExpectedType()
    {
        return ConfirmationType::EXTERNAL;
    }
}
