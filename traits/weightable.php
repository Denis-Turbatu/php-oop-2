<?php
trait Weightable {
    protected float $weight;

    /**
     * Get the value of weight
     */ 
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * Set the value of weight
     *
     */ 
    public function setWeight(float $weight)
    {
        $this->weight = $weight;
        return $this;
    }
}