<?php
require_once __DIR__ . '/User.php';

class NoLogUser extends User{
    // override
    public $balance = 80;
}
?>