<?php

// require_once "book.php";
require_once "physicalBook.php";
require_once "digitalBook.php";

$book = new Book("Ade goes to school", "John Doe", 200);
print $book->print() . PHP_EOL;

$physicalBook = new physicalBook("Things Fall Apart", "Chinua Achebe", 2000, 400);

// $digitalBook = new digitalBook("Things Fall Apart", "Chinua Achebe", 1500, 360);

print $physicalBook->print() . PHP_EOL;

// print $digitalBook->print() . PHP_EOL;