<?php
class Order 
{
    private $customer;
    private $cart;
    private $paymentMethod;
    private $status = "Pending";

    public function __construct($customer, $paymentMethod) {
        $this->customer = $customer;
        $this->paymentMethod = $paymentMethod;
        $this->cart = $customer->getCart();
    }
    public function placeOrder()
    {
        $total = $this->cart->getTotalPrice();
        $result = $this->paymentMethod->pay($total);
        $this->status = "Completed";

        return $result;
    }
    public function getStatus()
    {
        return $this->status;
    }

}