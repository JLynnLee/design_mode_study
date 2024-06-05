<?php

namespace code_design\strategy;

class Order
{
    protected $orderPayment;
    public function __construct (OrderPayment $orderPayment)
    {
        $this->orderPayment = $orderPayment;
    }

    public function getTotalFee (string $totalFee)
    {
        return $this->orderPayment->calculateAmount($totalFee);
    }
}