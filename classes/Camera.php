<?php
include_once __DIR__ . '/Product.php';

/*
 * Class Camera extends Product class
 */
class Camera extends Product {
  /*
   * Properties
   */
  public $obz;
  public $weight;

  /*
   * Constructor
   */
  public function __construct($brand, $model, $price, $obz, $weight) {
    parent::__construct($brand, $model, $price);
    $this->obz = $obz;
    $this->weight = $weight;
  }

  /*
   * Methods
   */
  public function setDiscount() {
    return parent::setDiscount();
  }
}