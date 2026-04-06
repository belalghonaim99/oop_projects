<?php
require('customer.php');
require('discount.php');
require('fixedDiscount.php');
require('percentageDiscount.php');
require('product.php');
require 'paymentMethod.php';
require 'cashPayment.php';
require 'visaPayment.php';

$productOne = new Products('Iphone', 1000);

$newDiscount = new PercentageDiscount();
echo $newDiscount->apply(1000);

echo '<br>';
$fixed_Discount = new FixedDiscount();

echo $fixed_Discount->apply(1000);
echo '<br>';
$cash = new CashPayment('Iphone', 1000);
echo $cash->pay_with(1000);