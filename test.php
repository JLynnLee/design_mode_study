<?php
require_once __DIR__.'\singleton\Singleton.php';
require_once __DIR__.'\factory\Factory.php';
require_once __DIR__.'\factory\BMW.php';
require_once __DIR__.'\factory\Audi.php';

use code_design\factory\Factory;
use code_design\singleton\Singleton;

// 单例模式测试
//$singleton = Singleton::getInstance();
//$singleton2 = Singleton::getInstance();
//var_dump($singleton->getInstanceData());
//$singleton->setInstanceData('数据已变更');
//var_dump($singleton->getInstanceData());
//var_dump($singleton2->getInstanceData());

// 简单工厂测试
try {
    $bmw = Factory::createCar('BMW');
    $audi = Factory::createCar('Audi');
//    $invalid = Factory::createCar('Xiaomi');
    var_dump($bmw->getModel());
    var_dump($audi->getModel());
    var_dump($bmw->startEngine());
    var_dump($audi->startEngine());
} catch (Exception $e) {
    var_dump($e->getMessage());
}
