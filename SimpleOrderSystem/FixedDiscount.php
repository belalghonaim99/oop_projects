<?php
class FixedDiscount extends Discount
{
    public function apply($total)
    {
        return $total - 20;
    }
}