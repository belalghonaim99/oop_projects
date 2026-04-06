<?php
class FixedDiscount extends Discount
{
    private $fixed = 50;
    public function apply($total)
    {
        return $total - 50; // 200 - 50
    }
}