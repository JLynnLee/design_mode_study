<?php
require_once __DIR__.'\singleton\Singleton.php';
use code_design\singleton\Singleton;

$singleton = Singleton::getInstance();
$singleton2 = Singleton::getInstance();
var_dump($singleton->getInstanceData());
$singleton->setInstanceData('数据已变更');
var_dump($singleton->getInstanceData());
var_dump($singleton2->getInstanceData());