<?php
namespace code_design\abstract_factory;
require_once __DIR__.'\AbstractFactory.php';
require_once __DIR__.'\Computer.php';


class ComputerAbstractFactory extends AbstractFactory {
    public function create(): Computer
    {
        return new Computer();
    }
}
