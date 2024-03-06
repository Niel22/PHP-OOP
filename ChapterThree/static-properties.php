<?php

require_once "counter.php";
require_once "connection.php";

$connection1 = new Connection();

print $connection1::$count . PHP_EOL;

$connection2 = new Connection();

print $connection2::$count . PHP_EOL;
// print Counter::$count . PHP_EOL;

Connection::$count += 20;
print Connection::$count . PHP_EOL;