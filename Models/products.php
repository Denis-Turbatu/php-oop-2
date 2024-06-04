<?php 
class Products {

    protected string $url_img;
    protected string $title;
    protected float $price;
    private string $prod_type;

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

    /**
     * Set the value of url_img
     *
     * @return  self
     */ 
    public function setUrl_img($url_img)
    {
        $this->url_img = $url_img;

        return $this;
    }

    /**
     * Set the value of title
     *
     * @return  self
     */ 
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Set the value of price
     *
     * @return  self
     */ 
    public function setPrice($price)
    {
        $this->price = $price;
        return $this;
    }

    /**
     * Set the value of prod_type
     *
     * @return  self
     */ 
    public function setProd_type($prod_type)
    {
        $this->prod_type = $prod_type;

        return $this;
    }
}