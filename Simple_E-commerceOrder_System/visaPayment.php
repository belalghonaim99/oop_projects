<?php
class VisaPayment implements PaymentMethods
{
    private $cardNumber;
    
    public function __construct($cardNumber) {
        $this->cardNumber = $cardNumber;
    }
    public function pay_with($amount)
    {
        return  "Paid $amount Using Visa({$this->cardNumber})";
    }
}