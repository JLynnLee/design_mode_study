<?php
namespace code_design\abstract_factory;
require_once __DIR__.'\AbstractFactory.php';
require_once __DIR__.'\MobilePhone.php';

class MobilePhoneAbstractFactory extends AbstractFactory {

    public function create (): MobilePhone
    {
        return new MobilePhone();
    }
}
