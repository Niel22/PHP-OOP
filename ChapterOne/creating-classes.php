<?php


class Product{

    public $name = 'soaps';
    public $price;

    public function priceAsCurrency(){
        $priceAsCurrency = $this->price / 100;

        return $priceAsCurrency;
    }
}

$soap = new Product();

$soap->price = 550;

$priceAsCurrency = $soap->priceAsCurrency();

var_dump($priceAsCurrency) . PHP_EOL;