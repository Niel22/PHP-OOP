<?php

require_once "Book.php";
require_once "physicalBook.php";

$book = new physicalBook("Things Fall Apart", "Chinua Achebe", 200);

print $book->get_title();
