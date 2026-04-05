<?php
class Account
{
    private $accountNumber;

    protected $balance;

    public function __construct($accountNumber, $balance) {
        if(empty($accountNumber))
            {
                throw new Exception("Account Number Cannot be empty");
            }
        if($balance < 0)
            {
                throw new Exception("Check Your Balance and Try Again");
            }
        $this->accountNumber = $accountNumber;
        $this->balance = $balance;
    }
    public function getAccountNumber()
    {
        return $this->accountNumber;
    }
    public function getBalance()
    {
        return $this->balance;
    }
    public function depoist($amount)
    {
        if($amount <= 0)
            {
                throw new Exception("Check Your Balance and Try Again to add");              
            }
        return $this->balance += $amount;
    }
    public function withDraw($amount)
    {
        if($amount > $this->balance)
            {
                throw new Exception("Check Your Balance and Try Again");
            }
        return $this->balance -= $amount;
    }
}