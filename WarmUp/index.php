<?php
require('account.php');
require('CurrentAccount.php');
require('SavingAccount.php');

$accountOne = new Account('1123', 0);

echo $accountOne->depoist(11000);
echo '<br>';

echo $accountOne->withDraw(600);
echo '<br>';

$saveAccount = new SavingAccount('1234', 1000);
echo '<br>';

echo $saveAccount->interest();

$currentAccount = new CurrentAccount('1235', 1000);

echo '<br>';

echo $currentAccount->overDraft();