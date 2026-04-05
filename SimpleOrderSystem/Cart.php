<?php
class Cart
{
    public array $products = [];

    public function addProduct(Product $product)
    {
        $this->products[] = $product;
    }
    public function getTotalPrice()
    {
        $total = 0;
        foreach($this->products as $product)
            {
                $total += $product->getPrice();
            }
            return $total;
    }   
    public function showCart()    
    {
        foreach($this->products as $product)
            {
                echo $product->getName() . " - " . $product->getPrice() . " EGP <br>"; 
            }
            echo "Total: " . $this->getTotalPrice() . " EGP <br>";
    }

}