<?php
class CashPayment extends Payment
{
    public function pay($amount)
    {
        return "Paid $amount  EGP Using Cash ";
    }
}