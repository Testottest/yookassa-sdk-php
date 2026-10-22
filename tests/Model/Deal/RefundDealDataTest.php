<?php

namespace Tests\Testottest\Model\Deal;

use PHPUnit\Framework\TestCase;
use Testottest\Helpers\Random;
use Testottest\Model\Deal\RefundDealData;
use Testottest\Model\Deal\SettlementPayoutPayment;
use Testottest\Model\Deal\SettlementPayoutPaymentType;

class RefundDealDataTest extends TestCase
{

    /**
     * @dataProvider fromArrayDataProvider
     * @param array $source
     * @param RefundDealData $expected
     */
    public function testFromArray($source, $expected)
    {
        $deal = new RefundDealData($source);
        $dealArray = $expected->toArray();

        if (!empty($deal)) {
            foreach ($deal->toArray() as $property => $value) {
                self::assertEquals($value, $dealArray[$property]);
            }
        }
    }

    public function validDataProvider()
    {
        $result = [];
        for ($i = 0; $i < 10; $i++) {
            $payment = array(
                'refund_settlements' => $this->generateRefundSettlements(),
            );
            $result[] = array($payment);
        }
        return $result;
    }

    public function invalidDataProvider()
    {
        $result = array(
            array(
                array(
                    'refund_settlements' => null,
                )
            ),
            array(
                array(
                    'refund_settlements' => '',
                ),
            ),
        );
        $invalidData = array(
            array(null),
            array(''),
            array(new \stdClass()),
            array('invalid_value'),
            array(0),
            array(3234),
            array(true),
            array(false),
            array(0.43),
        );
        for ($i = 0; $i < 9; $i++) {
            $payment = array(
                'refund_settlements' => Random::value($invalidData),
            );
            $result[] = array($payment);
        }
        return $result;
    }

    public function fromArrayDataProvider()
    {
        $deal = new RefundDealData();
        $settlements = [];
        $settlements[] = new SettlementPayoutPayment(array(
            'type' => SettlementPayoutPaymentType::PAYOUT,
            'amount' => array(
                'value' => 123.00,
                'currency' => 'RUB',
            ),
        ));
        $deal->setRefundSettlements($settlements);

        return array(
            array(
                array(
                    'refund_settlements' => array(
                        array(
                            'type' => SettlementPayoutPaymentType::PAYOUT,
                            'amount' => array(
                                'value' => 123.00,
                                'currency' => 'RUB',
                            ),
                        )
                    ),
                ),
                $deal
            ),
        );
    }

    private function generateRefundSettlements()
    {
        $return = [];
        $count = Random::int(1, 10);

        for ($i=0; $i < $count; $i++) {
            $return[] = $this->generateRefundSettlement();
        }

        return $return;
    }

    private function generateRefundSettlement()
    {
        return array(
            'type' => Random::value(SettlementPayoutPaymentType::getValidValues()),
            'amount' => array(
                'value' => round(Random::float(1.00, 100.00), 2),
                'currency' => 'RUB',
            ),
        );
    }

}
