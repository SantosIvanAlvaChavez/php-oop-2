<?php
include_once __DIR__ . '/Product.php';

/*
 * Class Television extends Product class
 */
class Television extends Product {
  /*
   * Properties
   */
  public $ris;
  public $dim;

  /*
   * Constructor
   */
  public function __construct($brand, $model, $price, $ris, $dim) {
    parent::__construct($brand, $model, $price);
    $this->ris = $ris;
    $this->dim = $dim;
  }

  /*
   * Methods
   */
  public function setDiscount() {
    return parent::setDiscount();
  }
}