<?php
require_once __DIR__ . "/products.php";
class Categories extends products {
    private string $animal;

    public function __construct(string $_url_img, string $_title, float $_price, string $_prod_type, string $_animal){
        parent::__construct($_url_img, $_title, $_price, $_prod_type);
        $this->animal = $_animal;
    }

    /**
     * Get the value of animal
     */ 
    public function getAnimal()
    {
        return $this->animal;
    }
}