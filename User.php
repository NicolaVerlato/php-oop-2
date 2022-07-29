<?php

class User{
    public $name;
    public $email;
    public $discount = 0;
    public $balance = 0;
    protected $selectedProducts = [];

    public function __construct($_name, $_email){
        $this->name = $_name;
        $this->email = $_email;
    }

    public function addNewProduct($product) {
        $this->selectedProducts[] = $product;
    }

    public function getProdottiScelti() {
        return $this->selectedProducts;
    }

    public function calcFullPrice(){
        $fullPrice = 0;
        foreach($this->selectedProducts as $product){
            $fullPrice += $product->price;
        }

        // calculate discount if !== 0
        $fullPrice -= $fullPrice * $this->discount / 100;
        return $fullPrice;
    }

    public function makePayment(){
        if($this->balance < $this->calcFullPrice()) {
            throw new Exception('Pagamento non riuscito');
            // die("Pagamento non riuscito");
        } else {
            return 'buon fine';
        }
    }
};

?>