<?php
interface PaymentMethod
{
    public function pay($amount);
}