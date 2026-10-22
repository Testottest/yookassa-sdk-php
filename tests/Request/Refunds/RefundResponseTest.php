<?php

namespace Tests\Testottest\Request\Refunds;

use Testottest\Request\Refunds\RefundResponse;

class RefundResponseTest extends AbstractRefundResponseTest
{
    /**
     * @param array $options
     * @return RefundResponse
     */
    protected function getTestInstance($options)
    {
        return new RefundResponse($options);
    }
}
