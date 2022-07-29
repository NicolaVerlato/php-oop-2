<?php
require_once __DIR__ . '/User.php';

class LogUser extends User{
    // override
    public $discount = 20;
    // override
    public $balance = 70;
}
?>