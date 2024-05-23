<?php
namespace code_design\factory;
require_once __DIR__.'\Car.php';

class Audi extends Car {

    function getModel (): string
    {
        return "this is is Audi car.";
    }

    function startEngine (): string
    {
        return "start Audi Engine";
    }
}
