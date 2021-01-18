<?php

/*
 * class product
 */
class Product {
  /*
   * Properties
   */
  public $brand;
  public $model;
  public $price;

  /*
   * Constructor
   */
  public function __construct($brand, $model, $price) {
    $this->brand = $brand;
    $this->model = $model;
    $this->price = $price;
  }

  /*
   * Methods
   */
  // Price
  public function getPrice() {
    return $this->price;
  }

  // Discount 50%
  protected function setDiscount() {
    return 0.5;
  }
}
