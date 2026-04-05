<?php
class SavingAccount extends Account
{
    private $interest = 0.2;

    public function __construct($accountNumber, $balance) {
        parent::__construct($accountNumber, $balance);
    }

    public function interest()
    {
        if($this->getBalance() <= 0)
            {
                throw new Exception("Sorry You Don't Have Balance");
            }
    $interestValue = $this->getBalance() * $this->interest;
    $newBalance = $this->getBalance() + $interestValue;

    return "Interest: $interestValue, New Balance: $newBalance";
    }
}
