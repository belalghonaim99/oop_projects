<?php
class PercentageDiscount extends Discount
{
    public function apply($total)
    {
        return $total - ($total * 0.1);
    }
}