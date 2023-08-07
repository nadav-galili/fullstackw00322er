<?php 

require_once 'lesson13.php';

$db = new DB();
$connection = $db->connect('eshop');
echo '<pre>';
print_r($connection);
echo '</pre>';


$diggConnection = $db->connect('digg');
echo '<pre>';
print_r($diggConnection);
echo '</pre>';