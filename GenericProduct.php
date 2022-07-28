<?php

class GenericProduct{
    public $name;
    public $quantity;
    public $price = 0;

    public function __construct($_name, $_price, $_quantity){
        $this->name = $_name;
        $this->price = $_price;
        $this->quantity = $_quantity;
    }
}

?>