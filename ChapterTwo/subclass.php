<?php

require_once "baseclass.php";

class SubClass extends BaseClass
{
    public function getParentprotectedProperties(){
        return $this->protectedProperty;
    }
    
    public function getParentPrivateProperties(){
        return $this->getprivateProperty();
    }

}
