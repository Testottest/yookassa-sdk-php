<?php

namespace Tests\Testottest\Request\Refunds;

use Testottest\Request\Refunds\CreateRefundResponse;

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
