<?php

namespace Tests\Testottest\Request\Payouts;

use Testottest\Request\Payouts\PayoutResponse;

class PayoutResponseTest extends AbstractPayoutResponseTest
{
    protected function getTestInstance($options)
    {
        return new PayoutResponse($options);
    }
}
