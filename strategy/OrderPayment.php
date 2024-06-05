<?php
namespace code_design\strategy;

interface OrderPayment {
    public static function calculateAmount(string $totalFee);
}