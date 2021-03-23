<?php

class Vending_Machine
{
   
    var $item = '';
    var $amount = 0;
    var $price = 0;
    
    function __construct($item, $amount, $price)
    {
        $this->item = $item;
        $this->amount = $amount;
        $this->price = $price;
    }
}
