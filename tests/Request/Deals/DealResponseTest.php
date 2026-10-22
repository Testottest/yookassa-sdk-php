<?php

namespace Tests\Testottest\Request\Deals;

use Testottest\Request\Deals\DealResponse;

class DealResponseTest extends AbstractDealResponseTest
{
    protected function getTestInstance($options)
    {
        return new DealResponse($options);
    }
}
