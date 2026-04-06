<?php
class VisaPayment implements PaymentMethods
{
    private $cardNumber;
    
    public function __construct($cardNumber) {
        $this->cardNumber = $cardNumber;
    }
    public function payWith($amount)
    {
        return  "Paid $amount Using Visa ({$this->cardNumber})";
    }
}