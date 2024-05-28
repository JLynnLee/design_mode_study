<?php
namespace code_design\abstract_factory;
interface HardWareInterface {
    public function createScreen():string;
    public function createCPU():string;
}

interface SoftWareInterface {
    public function createSystem():string;
    public function createApp():string;
}