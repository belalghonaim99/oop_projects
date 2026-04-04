<?php
class CashPayment implements PaymentMethod
{
    public function pay($amount)
    {
        if($amount <= 0)
            {
                throw new Exception("Invalid Amount");
            }
        return "Paid $amount Using Cash";
    }
}