<?php
require_once __DIR__ . "/products.php";
require_once __DIR__ . "/../traits/weightable.php";
class Categories extends products
{
    use Weightable;

    private string $animal;

    public function __construct(string $_url_img, string $_title, float $_price, string $_prod_type, float $_weight, string $_animal)
    {
        parent::setUrl_img($_url_img);
        parent::setTitle($_title);
        parent::setPrice($_price);
        parent::setProd_type($_prod_type);
        $this->weight = $_weight;
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
