<?php 
class Products {
    protected string $url_img;
    protected string $title;
    protected float $price;
    protected string $prod_type;

    public function __construct(string $_url_img, string $_title, float $_price, string $_prod_type, ){
        $this->url_img = $_url_img;
        $this->title = $_title;
        $this->price = $_price;
        $this->prod_type = $_prod_type;
    }
    

    /**
     * Get the value of url_img
     */ 
    public function getUrl_img()
    {
        return $this->url_img;
    }

    /**
     * Get the value of title
     */ 
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Get the value of price
     */ 
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Get the value of prod_type
     */ 
    public function getProd_type()
    {
        return $this->prod_type;
    }
}