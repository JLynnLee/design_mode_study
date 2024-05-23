<?php
namespace code_design\factory;
require_once __DIR__.'\Car.php';

class BMW extends Car {

    function getModel (): string
    {
        return "this is is BMW car.";
    }

    function startEngine (): string
    {
        return "start BMW Engine";
    }
}
