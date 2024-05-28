<?php
require_once __DIR__.'\singleton\Singleton.php';
require_once __DIR__.'\factory\Factory.php';
require_once __DIR__.'\factory\BMW.php';
require_once __DIR__.'\factory\Audi.php';
require_once __DIR__.'\abstract_factory\ComputerAbstractFactory.php';
require_once __DIR__.'\abstract_factory\MobilePhoneAbstractFactory.php';
require_once __DIR__.'\abstract_factory\AbstractFactory.php';

use code_design\abstract_factory\ComputerAbstractFactory;
use code_design\abstract_factory\MobilePhoneAbstractFactory;
use code_design\factory\Factory;
use code_design\singleton\Singleton;

// 单例模式测试
var_dump("==================单例模式=====================");
$singleton = Singleton::getInstance();
$singleton2 = Singleton::getInstance();
var_dump($singleton->getInstanceData());
$singleton->setInstanceData('数据已变更');
var_dump($singleton->getInstanceData());
var_dump($singleton2->getInstanceData());
var_dump("==================单例模式=====================");

// 简单工厂测试
var_dump("==================简单工厂模式=====================");
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
var_dump("==================简单工厂模式=====================");

var_dump("==================抽象工厂模式=====================");
// 抽象工厂模式
$computerFactory = new ComputerAbstractFactory();
$computer = $computerFactory->create();
var_dump($computer->createScreen());
var_dump($computer->createCPU());
var_dump($computer->createSystem());
var_dump($computer->createApp());
$mobilePhoneFactory = new MobilePhoneAbstractFactory();
$mobilePhone = $mobilePhoneFactory->create();
var_dump($mobilePhone->createScreen());
var_dump($mobilePhone->createCPU());
var_dump($mobilePhone->createSystem());
var_dump($mobilePhone->createApp());
var_dump("==================抽象工厂模式=====================");
