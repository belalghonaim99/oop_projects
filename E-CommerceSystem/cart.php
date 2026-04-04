<?php
class Cart
{
    public array $items = [];

    public function addItem(Product $product, $qty)
    {
        $this->items[]=
        [
            'product' => $product,
            'qty'     => $qty  
        ];
    }
    public function getItems()
    {
        return $this->items;
    }
    public function getTotalPrice()
    {
        $total = 0;
        foreach($this->items as $item)
            
            {
                $product = $item['product'];
                $qty      = $item['qty'];

                $total += $product->getPrice() * $qty;
            }
            return $total;
    }
}