<?php
class WalletPayment implements PaymentMethod
{
    private $balance;
    public function __construct($balance) {
        $this->balance = $balance;
    }
    public function getBalance()
    {
        return $this->balance;
    }
    public function pay($amount)
    {
        if($amount <= 0)
        {
            throw new \Exception('Invalid Amount');
        }
        if ($this->balance < $amount) {
            throw new \Exception('Insufficient balance');
        }
        return "Paid $amount using Wallet. Remaining balance: ". $this->balance - $amount;
    }
}