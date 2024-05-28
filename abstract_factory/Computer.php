<?php
namespace code_design\abstract_factory;
require_once __DIR__.'\ProductInterface.php';

class Computer implements HardWareInterface,SoftWareInterface {

    public function createScreen (): string
    {
        return 'create computer screen';
    }

    public function createCPU (): string
    {
        return 'create computer CPU';
    }

    public function createSystem (): string
    {
        return 'create computer system';
    }

    public function createApp (): string
    {
        return 'create computer app';
    }
}
