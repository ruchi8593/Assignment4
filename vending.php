<?php
// vending class is created

class Vending
{
   
    var $product = '';
    var $amount = 0;
    var $price = 0;
    var $remainingamount = 0;
    //values passed to the parameters of the constructor
    function __construct($product, $amount, $price)
    {
        $this->product = $product;
        $this->amount = $amount;
        $this->price = $price;
    }
    //buy function include remaining amount ahich is done by calculating amount
    
    function buy()
    {
    $this->remainingamount = $this->amount - $this->price;
    if($this->remainingamount > 0)
        //print the required msg
        echo "Enjoy your ".$this->product ." and here is your remaining amount ".$this->remainingamount ." cents!!";
    else
        echo "Enjoy your ".$this->product. " !!";
    }
}

?>