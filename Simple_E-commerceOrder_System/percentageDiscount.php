<?php
class PercentageDiscount extends Discount
{
    private $precent = 0.1;
    public function apply($total)
    {
        return $total - ($total * $this->precent); // 200 -  (200 * 0.1 = 20)
    }
}