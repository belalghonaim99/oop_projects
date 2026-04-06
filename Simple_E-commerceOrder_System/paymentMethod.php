<?php
interface PaymentMethods
{
    public function pay_with($amount);
}