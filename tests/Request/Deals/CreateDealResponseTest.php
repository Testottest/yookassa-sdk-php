<?php

namespace Tests\YooKassa\Request\Deals;

use testottest\Request\Deals\CreateDealResponse;

class CreateDealResponseTest extends AbstractDealResponseTest
{
    protected function getTestInstance($options)
    {
        return new CreateDealResponse($options);
    }
}
