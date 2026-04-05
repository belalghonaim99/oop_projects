<?php

class CurrentAccount extends Account
{
    private $overdraftLimit = 50;

    public function __construct($accountNumber,$balance) {
        parent::__construct($accountNumber, $balance);
    }
    public function getOverDraft()
    {
        return $this->overdraftLimit;
    }
    public function withdraw($amount)
{
    if($amount > ($this->getBalance() + $this->overdraftLimit)) {
        throw new Exception("Overdraft limit exceeded");
    }

    $this->balance -= $amount;
    return $this->balance;
}
    public function overDraft()
    {
        if($this->getBalance() <= 0)
            {
                throw new Exception("Sorry You Don't Have any enough balance");
            }
        return 'Sorry You reached Your OverdraftLimit this month your balance after overdraftlimit ' 
        .$this->getBalance() . ' - ' . $this->overdraftLimit . ' = '
        .$this->getBalance() - $this->overdraftLimit;
    }
}