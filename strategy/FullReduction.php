<?php
namespace code_design\strategy;
require_once 'OrderPayment.php';

class FullReduction implements OrderPayment
{
    public static function calculateAmount (string $totalFee): string
    {
        return $totalFee - 15;
    }
}