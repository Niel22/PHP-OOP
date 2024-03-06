<?php

class Book
{
    public $title;
    public $author;
    public $price;
    public $type;
    public $weight;
    public $fileSize;

    public function __construct(string $title, string $author, int $price)
    {

        $this->title = $title;
        $this->author = $author;
        $this->price = $price;
    }

    public function get_title(): string
    {
        return $this->title;
    }
    public function get_author(): string
    {
        return $this->author;
    }
    public function get_price(): int
    {
        return $this->price;
    }

    public function getPriceAsCurrency(){
        return "$". $this->price / 100;
    }

    public function print(){
        return "{$this->title}, {$this->author}, {$this->getPriceAsCurrency()}";
    }
}