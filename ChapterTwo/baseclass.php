<?php

class BaseClass
{
    public $publicProperty = "Public class can be accessed anywhere in your code";

    protected $protectedProperty = "Protected property can only be accessed within the declaring class or from a subclass";

    private $privateProperty = "Private property can only be accessed in within the declaring class";
    public function getProtectedProperty(){
        return $this->protectedProperty;
    }
    public function getprivateProperty(){
        return $this->privateProperty;
    }
}