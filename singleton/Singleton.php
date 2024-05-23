<?php
namespace code_design\singleton;
// 创建型之单例模式
class Singleton {
    private static $instance;

    private $instanceData = '初始数据';

    // 构造函数设置为私有防止外部直接创建对象
    private function __construct ()
    {
        // 一些初始化操作
    }

    // 设置私有防止克隆
    private function __clone ()
    {
    }

    public static function getInstance(): Singleton
    {
        if  (!self::$instance) {
            self::$instance = new Singleton();
        }

        return self::$instance;
    }

    public function setInstanceData(string $instanceData)
    {
        $this->instanceData = $instanceData;
    }

    public function getInstanceData (): string
    {
        return $this->instanceData;
    }
}

