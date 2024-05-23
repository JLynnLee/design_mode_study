<?php
namespace code_design\factory;

class Factory {

    public static function createCar(string $carType)
    {
        switch ($carType) {
            case 'BMW' :
                return new BMW();
            case 'Audi' :
                return new Audi();
            default :
                throw new \InvalidArgumentException('没有这种类型的汽车！');
        }
    }
}