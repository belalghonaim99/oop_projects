<?php
class CashPayment implements PaymentMethods
{
    public function pay_with($amount)
    {
        return "Paid $amount Using Cash";
    }
}