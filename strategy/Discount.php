<?php
namespace code_design\strategy;
require_once 'OrderPayment.php';

class Discount implements OrderPayment
{
    public static function calculateAmount (string $totalFee): string
    {
        return $totalFee * 0.9;
    }
}