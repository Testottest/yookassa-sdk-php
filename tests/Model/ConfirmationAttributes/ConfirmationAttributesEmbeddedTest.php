<?php

namespace Model\ConfirmationAttributes;


use Tests\YooKassa\Model\ConfirmationAttributes\AbstractConfirmationAttributesTest;
use testottest\Model\ConfirmationAttributes\AbstractConfirmationAttributes;
use testottest\Model\ConfirmationAttributes\ConfirmationAttributesEmbedded;
use testottest\Model\ConfirmationType;

class ConfirmationAttributesEmbeddedTest extends AbstractConfirmationAttributesTest
{

    /**
     * @return AbstractConfirmationAttributes
     */
    protected function getTestInstance()
    {
        return new ConfirmationAttributesEmbedded();
    }

    /**
     * @return string
     */
    protected function getExpectedType()
    {
        return ConfirmationType::EMBEDDED;
    }
}
