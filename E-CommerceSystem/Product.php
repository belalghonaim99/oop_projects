<?php
class Product
{
    private $name;
    private $price;
    private $stock;


    public function __construct($name, $price, $stock) {
        $this->name = $name;
        $this->price = $price;
        $this->stock = $stock;
    }
    public function getName()
    {
        return $this->name;
    }
    public function getStock()
    { 
        return $this->stock;
    }
    public function getPrice()
    {
        return $this->price;
    }

    public function decreaseStock($qty)
    {
        if($qty >= $this->stock)
            {
                $this->stock -= $qty;
                return true;
            }
        return false;
    }
    public function isAvailable($qty)
    {
        if($this->stock >= $qty )
            {
                return true;
            }
            return false;
    }
}