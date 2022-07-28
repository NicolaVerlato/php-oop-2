<?php
require_once __DIR__ . '/GenericProduct.php';

class DogSnacks extends GenericProduct{
    public $ingredients;

    // override
    public function __construct($_name, $_price, $_ingredients){
        $this->name = $_name;
        $this->price = $_price;
        $this->ingredients = $_ingredients;
    }
}
?>