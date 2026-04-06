<?php
class FixedDiscount extends Discount
{
    private $fixed;
    
    public function __construct($fixed) {
        $this->fixed = $fixed;
    }
    public function apply($total)
    {
        return $total - $this->fixed; 
    }
}