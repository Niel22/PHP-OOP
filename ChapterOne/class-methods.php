<?php


class Product{

    public $name = 'soaps';
    public $price = 100;

    public function priceAsCurrency($divisor = 1, $currencySymbol = "$"){
        $priceAsCurrency = $this->price / $divisor;

        return $currencySymbol ." ". $priceAsCurrency;
    }
}

$product = new Product();
$product->price = 300;

$priceAsCurrency = $product->priceAsCurrency(100, '#');
print $priceAsCurrency . PHP_EOL;