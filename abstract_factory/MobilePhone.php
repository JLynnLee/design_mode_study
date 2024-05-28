<?php
namespace code_design\abstract_factory;

class MobilePhone implements HardWareInterface,SoftWareInterface {

    public function createScreen (): string
    {
        return 'create mobile phone screen';
    }

    public function createCPU (): string
    {
        return 'create mobile phone CPU';
    }

    public function createSystem (): string
    {
        return 'create mobile phone system';
    }

    public function createApp (): string
    {
        return 'create mobile phone app';
    }
}
