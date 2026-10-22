<?php

namespace Tests\testottest\Request\Refunds;

use testottest\Request\Refunds\CreateRefundResponse;

class CreateRefundResponseTest extends AbstractRefundResponseTest
{
    /**
     * @param array $options
     * @return CreateRefundResponse
     */
    protected function getTestInstance($options)
    {
        return new CreateRefundResponse($options);
    }
}
