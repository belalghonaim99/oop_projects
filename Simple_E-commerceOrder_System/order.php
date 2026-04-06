<?php
class Order
{
    private Customer $customer;
    private array $products = [];
    private  Discount $discount;
    private  PaymentMethods $paymentMethod;

    public function __construct($customer) {
        $this->customer = $customer;
    }

    public function addProduct(Products $product): void
    {
        $this->products[] = $product;
    }
    public function setDiscount(Discount $discount)
    {
    $this->discount = $discount;
    }
    public function setPaymentMethod(PaymentMethods $payment)
    {
        $this->paymentMethod = $payment;
    }
    public function calculateTotal()
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
    public function checkOut()
    {
        if (!$this->paymentMethod) 
            {
                throw new Exception("Payment method not set");
            }
        $total = $this->calculateTotal();
        return $this->paymentMethod->payWith($total);
    }
}