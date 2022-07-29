<?php
require_once __DIR__ . '/LogUser.php';
require_once __DIR__ . '/NoLogUser.php';
require_once __DIR__ . '/DogSnacks.php';
require_once __DIR__ . '/Doghouse.php';
require_once __DIR__ . '/Dogbrush.php';

$marco = new LogUser('Marco', 'marco@email.com');

$brush = new Dogbrush('Dog Brush', 20, 2);
$brush->materials = 'plastic';

$house = new Doghouse('Dog House', 80, 1);
$house->materials = 'plastic';
$house->size = 200;

$marco->addNewProduct($brush);
$marco->addNewProduct($house);

$marco->calcFullPrice();
$marco->makePayment();

try{
    $res = $marco->makePayment();
    if($res === 'buon fine'){
        echo "Grazie per aver effettuato l'ordine";
    } 
} catch(Exception $e) {
    error_log($e->getMessage());
    echo $e->getMessage();
    // echo "La transazione non è andata a buon fine, ti preghiamo di riprovare";
}
?>