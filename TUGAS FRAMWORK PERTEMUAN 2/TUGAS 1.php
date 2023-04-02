<?php

class Product {
  public $name;
  public $price;
  public $discount;

  function __construct($name, $price, $discount) {
    $this->name = $name;
    $this->price = $price;
    $this->discount = $discount;
  }

  function getPriceWithMarkup() {
    return $this->price * 1.1;
  }

  function getDiscountWithMarkup() {
    return $this->discount * 1.05;
  }
}

class CDMusic extends Product {
  function getPriceWithMarkup() {
    return parent::getPriceWithMarkup() * 1.05;
  }

  function getDiscountWithMarkup() {
    return parent::getDiscountWithMarkup();
  }
}

class CDRack extends Product {
  function getPriceWithMarkup() {
    return parent::getPriceWithMarkup() * 1.15;
  }

  function getDiscountWithMarkup() {
    return parent::getDiscountWithMarkup();
  }
}

$cdMusic = new CDMusic("CDMusic", 100, 10);
echo "Product Name: " . $cdMusic->name . "\n";
echo "Original Price: " . $cdMusic->price . "\n";
echo "Discount: " . $cdMusic->discount . "\n";
echo "Price with Markup: " . $cdMusic->getPriceWithMarkup() . "\n";
echo "Discount with Markup: " . $cdMusic->getDiscountWithMarkup() . "\n";

$cdRack = new CDRack("CDRack", 200, 20);
echo "Product Name: " . $cdRack->name . "\n";
echo "Original Price: " . $cdRack->price . "\n";
echo "Discount: " . $cdRack->discount . "\n";
echo "Price with Markup: " . $cdRack->getPriceWithMarkup() . "\n";
echo "Discount with Markup: " . $cdRack->getDiscountWithMarkup() . "\n";

?>