<?php
class VisaPayment implements PaymentMethod
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
        if($amount <= 0)
            {
                throw new Exception('Invalid Amount');
            }
            return "Paid: $amount Using Visa ({$this->getCardNumber()})";
    }
}