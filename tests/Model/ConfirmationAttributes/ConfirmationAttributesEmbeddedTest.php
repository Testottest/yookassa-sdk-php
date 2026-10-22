<?php

namespace Model\ConfirmationAttributes;


use Tests\Testottest\Model\ConfirmationAttributes\AbstractConfirmationAttributesTest;
use Testottest\Model\ConfirmationAttributes\AbstractConfirmationAttributes;
use Testottest\Model\ConfirmationAttributes\ConfirmationAttributesEmbedded;
use Testottest\Model\ConfirmationType;

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
