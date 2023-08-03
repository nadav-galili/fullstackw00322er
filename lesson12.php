<?php


//create file, get file, delete file, updaate file data

// file_put_contents('data.txt', 'hello world');
// 
// 
// $content = "avi\n shimi\n moshe \n yossi";

// file_put_contents('data.txt', $content);

// $name = "\n Israel";

// file_put_contents('data.txt', $name, FILE_APPEND);

// $content = file_get_contents('data.txt');
// echo str_replace("\n", '<br>', $content);

// $content = "nisim\n 1234\n moshe\n 5633\n yossi\n 888\n 1133\n";
// file_put_contents('mixed.txt', $content);

// $content = file_get_contents('mixed.txt');
// $parts = explode("\n", $content);
// echo '<pre>';
// print_r($parts);

// foreach($parts as $value){
//     if(is_numeric($value)){
//         echo $value . '<hr>';
//     }
// }

unlink('data.txt');



?>