<?php
class VisaPayments extends Payment
{
    private $cardNumber;
    public function __construct($cardNumber) {
        $this->cardNumber = $cardNumber;
    }
    public function getCardNumber()
    {
        return $this->cardNumber;
    }
    public function pay($amount)
    {
        return "Paid $amount EGP using Visa ({$this->getCardNumber()})";
    }
}