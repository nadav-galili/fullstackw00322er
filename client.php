<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


require_once 'DB.php';

$db = new DB();
$db->connect('eshop');
$users = $db->select('SELECT * FROM users');
foreach($users as $user){
    echo $user['name'] . '<br>';
}

$db->close();


// $eshop_db = new DB();
// $eshop_db->connect('eshop');

//encapsulation


?>