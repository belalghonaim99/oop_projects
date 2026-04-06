<?php
class PercentageDiscount extends Discount
{
    private $precent;
    public function __construct($precent) {
        $this->precent = $precent;
    }
    public function apply($total)
    {
        return $total - ($total * $this->precent / 100);
    }
}