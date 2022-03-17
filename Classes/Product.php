<?php 

namespace Product;

class Product 
{
    private $name;
    private $price;
    private $sellingByKg;

    public function __construct(string $name, int|float $price, bool $sellingByKg)
    {
        $this->setName($name);
        $this->setPrice($price);
        $this->setSellingByKg($sellingByKg);
    }

    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of price
     */ 
    public function getPrice()
    {
        return $this->price;
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
     * Get the value of sellingByKg
     */ 
    public function getSellingByKg()
    {
        return $this->sellingByKg;
    }

    /**
     * Set the value of sellingByKg
     *
     * @return  self
     */ 
    public function setSellingByKg($sellingByKg)
    {
        if ($sellingByKg) {
            $this->sellingByKg = true;
        } else {
            $this->sellingByKg = false;
        }

        return $this;
    }
}