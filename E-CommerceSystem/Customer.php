<?php
class Customer
{
    private $name;
    private $customer;

    public function __construct($name) {
        $this->name = $name;
        $this->customer = new Cart();
    }
    public function getCart() {
    return $this->customer;
}
    public function addToCart(Product $product, $qty)
    {
        $this->customer->addItem($product, $qty);
    }

    public function checkOut()
    {
        $total = $this->customer->getTotalPrice();
        echo "Total: $total";
    }
}