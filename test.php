<?php
require_once __DIR__.'\singleton\Singleton.php';
require_once __DIR__.'\factory\Factory.php';
require_once __DIR__.'\factory\BMW.php';
require_once __DIR__.'\factory\Audi.php';
require_once __DIR__.'\abstract_factory\ComputerAbstractFactory.php';
require_once __DIR__.'\abstract_factory\MobilePhoneAbstractFactory.php';
require_once __DIR__.'\abstract_factory\AbstractFactory.php';
require_once __DIR__.'\strategy\Order.php';
require_once __DIR__.'\strategy\Discount.php';
require_once __DIR__.'\strategy\FullPayment.php';
require_once __DIR__.'\strategy\FullReduction.php';

use code_design\abstract_factory\ComputerAbstractFactory;
use code_design\abstract_factory\MobilePhoneAbstractFactory;
use code_design\factory\Factory;
use code_design\singleton\Singleton;
use code_design\strategy\Discount;
use code_design\strategy\FullPayment;
use code_design\strategy\FullReduction;
use code_design\strategy\Order;

// 单例模式测试，控制资源访问、节省系统资源，确保一个类只有一个实例，并提供一个全局访问点来访问这个实例
var_dump("==================单例模式=====================");
$singleton = Singleton::getInstance();
$singleton2 = Singleton::getInstance();
var_dump($singleton->getInstanceData());
$singleton->setInstanceData('数据已变更');
var_dump($singleton->getInstanceData());
var_dump($singleton2->getInstanceData());
var_dump("==================单例模式=====================");

// 简单工厂测试，一种创建对象的方式，无需暴露创建逻辑给客户端，而是将创建对象的责任委托给一个专门的工厂类
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
// 抽象工厂模式，一种创建型设计模式，它提供了一种方式来创建一系列相关或相互依赖的对象，而无需指定它们具体的类。这种模式在面向对象编程中特别有用，当你的系统需要创建多个产品族中的对象时，它可以确保这些对象属于同一个产品族
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

var_dump("==================策略模式=====================");
// 策略模式，一种行为设计模式，可以用来定义一系列可互换的算法，这些算法封装成单独的类，使得它们可以互相替换。这样，算法可以独立于使用它们的客户端而变化
$order = new Order(new FullReduction());
var_dump($order->getTotalFee(100));
var_dump((new Order(new FullPayment()))->getTotalFee(100));
var_dump((new Order(new Discount()))->getTotalFee(100));
var_dump("==================策略模式=====================");