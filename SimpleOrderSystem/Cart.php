<?php
class Cart
{
    private $discount;
    public array $products = [];

    public function addProduct(Product $product)
    {
        $this->products[] = $product;
    }
    public function setDiscount(Discount $discount)
    {
        $this->discount = $discount;
    }
    public function getTotalPrice()
    {
        $total = 0;
        foreach($this->products as $product)
            {
                $total += $product->getPrice();
            }
            if($this->discount)
                {
                    $total = $this->discount->apply($total);
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