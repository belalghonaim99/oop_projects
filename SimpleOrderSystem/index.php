<?php
require('Cart.php');
require('Product.php');
require('Payment.php');
require('CashPayment.php');
require('VisaPayment.php');

$productOne = new Product('Laptop', 1000);
$productOne->getInfo();

$productTwo = new Product('Laptop', 1500);
$productThree = new Product('Laptop', 2000);

$cart = new Cart;
$cart->addProduct($productOne);
$cart->addProduct($productTwo);
$cart->addProduct($productThree);

$cart->showCart();
// echo $cart->getTotalPrice();

$payment = new CashPayment();
$visaPayment = new VisaPayments(12354);

echo $payment->pay($cart->getTotalPrice());
echo '<br>';
echo $visaPayment->pay($cart->getTotalPrice());
