<?php

require_once "subclass.php";

$baseObject = new BaseClass();

$subObject = new SubClass();


print $baseObject->getprivateProperty() . PHP_EOL;
// print $baseObject->publicProperty . PHP_EOL;
// print $baseObject->getProtectedProperty() . PHP_EOL;

// print $subObject->publicProperty . PHP_EOL;
// print $subObject->getParentprotectedProperties() . PHP_EOL;
print $subObject->getParentPrivateProperties() . PHP_EOL;