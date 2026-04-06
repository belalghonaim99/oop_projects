<?php
class CashPayment implements PaymentMethods
{
    public function payWith($amount)
    {
        return "Paid $amount Using Cash";
    }
}