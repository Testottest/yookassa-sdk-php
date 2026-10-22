<?php

namespace Tests\Testottest\Model\ConfirmationAttributes;

use Testottest\Model\ConfirmationAttributes\ConfirmationAttributesQr;
use Testottest\Model\ConfirmationType;

class ConfirmationAttributesQrTest extends AbstractConfirmationAttributesTest
{
    /**
     * @return ConfirmationAttributesQr
     */
    protected function getTestInstance()
    {
        return new ConfirmationAttributesQr();
    }

    /**
     * @return string
     */
    protected function getExpectedType()
    {
        return ConfirmationType::QR;
    }
}
