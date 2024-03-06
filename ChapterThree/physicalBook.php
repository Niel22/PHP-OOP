<?php

require_once "book.php";

class physicalBook  extends Book
{
    public $weight;
    public function __construct(string $title, string $author, int $price, int $weight = 5)
    {
        parent::__construct($title, $author, $price);
        $this->weight = $weight;
    }


    public function get_weight(): int
    {
        return $this->weight;
    }

    // public function print(){
    //     return "{$this->title}, {$this->author}, {$this->getPriceAsCurrency()}, weight: {$this->weight}kg";
    // }

}
