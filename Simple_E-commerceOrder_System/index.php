<?php
require('customer.php');
require('discount.php');
require('fixedDiscount.php');
require('percentageDiscount.php');
require('product.php');
require 'paymentMethod.php';
require 'cashPayment.php';
require 'visaPayment.php';
require 'order.php';

$customer = new Customer("Belal");

$order = new Order($customer);

$order->addProduct(new Products("Laptop", 10000));

$order->addProduct(new Products("Mouse", 500));


$order->setDiscount(new PercentageDiscount(10));


$order->setPaymentMethod(new VisaPayment("1234"));


echo $order->checkout();
echo '<br>';
$customerTwo = new Customer("Omar");

$order = new Order($customerTwo);

$order->addProduct(new Products("Apple", 15000));

$order->addProduct(new Products("AppleWatch", 1500));


$order->setDiscount(new FixedDiscount(150));


$order->setPaymentMethod(new CashPayment());


echo $order->checkout();