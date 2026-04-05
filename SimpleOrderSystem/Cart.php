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
        $allCart = $this->products;
        $allPrice = $this->getTotalPrice();
        return $allCart;
    }

}