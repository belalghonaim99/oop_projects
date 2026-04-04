<?php
require('cart.php');
require('Customer.php');
require('Product.php');
require('PaymentMethod.php');
require('WalletPayment.php');
require('Order.php');
require('CashPayment.php');
require('VisaPayment.php');


$customer = new Customer("Belal");
$product1 = new Product("iPhone", 10000, 5);

$customer->addToCart($product1, 20);

$payment = new CashPayment();

$order = new Order($customer, $payment);
echo $order->placeOrder(); // Paid 20000 using Cash