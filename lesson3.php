<?php

// $x = 3;
// $x = $x*2;
// echo $x.'<br>';
// $x *=2;
// echo $x.'<br>';
// $x /=2;
// echo $x.'<br>';
// $x -=2;
// echo $x;
// // /////////////////////////////

// $str = 'hello';
// $str .= 'world';
// echo $str;
// ///

// $y +=3;
// echo $y;
// echo '<hr>';
// //power of
// $res = 2**3;
// echo $res;

/// spaceship operator  >php 7.0
/*
echo 9<=>3 // output 1
echo 'a' <=> 'A' // output 1
*/

///ternary operator

// $x = $y? $y :6;

// echo $x;

//null coalesing PHP>=7.00


// $title= 'my page';



// $x = 6;

// unset($x);

// echo $x;


//PHP MATH FUNCTIONS

// echo abs(-89.6);// absolute value
// echo '<hr>';
// $price = 3.216;

// echo ceil($price);//ceiling-round up
// //
// echo '<hr>';
// echo floor($price);
// echo '<hr>';

// echo rand(10,22);
// echo '<hr>';

// echo pi();
// echo '<hr>';

// echo 2**3;
// echo '<hr>';
// echo pow(2, 3);

// echo '<hr>';
// echo sqrt(81);

//  $price = 3.716;

// echo  round($price, 1);

//STRING FUNCTIONS 

// $user_name = '     avi Cohen     ';
// $user_name = trim($user_name);
// var_dump($user_name);

// $str = '!helollo';
// echo trim($str, '!');

// $str = '   !hell!o!  ';
// $str = trim($str);
// $str = trim($str, '!');
// var_dump($str);

// $str = '   hello    ';
// $str = rtrim($str);
// var_dump($str);


// $str = '!helllolo';
// echo strlen($str);
// echo '<hr>';
// $mystr = 'שלום';
// echo mb_strlen($mystr);

// $user = 'Avi cohen';
// echo $user . '<br>';
// echo strtoupper($user);
// echo '<br>';
// $user_name = 'MOSHE LEVY';
// echo strtolower($user_name);

// $user_name = 'avi cohen';
// echo ucwords($user_name);

// $user = 'aVi cOhEn';
// $user = strtolower($user);
// echo ucwords($user);

// $str = 'Hello world';
// echo $str.'<hr>';
// $str = str_replace('world', 'Man', $str);
// echo $str;

// $isbn = 'abb-yy-tre';
// //abyytre
// $isbn = str_replace('-','', $isbn);
// echo $isbn;

// $str = 'HEllo';
// $str = str_ireplace('he', 'A',$str);
// echo $str;

//clean url

// $title = '    Pro q fiNe Dell 45xp   ';
// $title = trim($title);
// $title = strtolower($title);
// $title = str_replace(' ', '-', $title);
// echo $title;


// $str = 'Hello';
// echo strpos($str,'H');

// $str = 'wHelwlow World';
// $res =  stripos($str , 'w');
// echo $res;

//SELE


// my_query("INSERT  INTO users");

// function my_query($sql){

//     if(stripos($sql, 'SELECT') === 0){
//         select($sql);
//     }

//     if(stripos($sql, 'INSERT') === 0){
//         insert($sql);
//     }
// }

// function select($sql){
//     echo 'im a select query';
// }

// function insert($sql){
//     echo 'im an insert query';
// }




// operator by refrence

// $x = 3;
// $y =& $x;
// $x = 17;
// $y = 20;

// echo "\$x :$x <br>";
// echo "\$y: $y <br>";


//  PAAMAYAM NEKUDOTAYM ::


// && || 

// $is_login = true;
// $email = 'avi@gmail.com';
// $res = $is_login && $email;

// if($res){
//     //connect user
// }

// if ($res){

// }


// if ( $is_login && $email){
//     //connect user
// }

// if($is_login && $email){
//     echo $email;
// }


// $res = true && true;
// $res = true && false;
// $res = 15 && 'hi';
// var_dump($res);



// $res1 = true && false;
// $res2 = true and false;
// var_dump($res1);
// var_dump($res2);



// if (true && false){}

// if(true and false){}

// $is_login = true;
// $email = '';
// $res = $is_login and $email;




// if ($res){
//     echo 'bingo';
// }

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


// if(true || $x ){
//     echo 'in';
// }


///XOR ^

// if(true ^ false){
//     echo 'hi';
// }

/*
falsy
============
empty string ''
0
'0'
empty array []
null
false
*/

//ISSET
// $num = 0;
// if(isset($num)){
//     echo 'code 1 <br>';
//     echo 'code 2 <br>';
//     echo 'code 3 <br>';
//     echo 'code 4 <br>';
// }

// $name = 'moshe';

// if(isset($name) && $name){
//     echo 'your name is:' .$name;
// }

//empty
//checks if isset && value is truthy

// if(!empty($name)){
//     echo 'your name is: '.$name;
// }

// $num = 0;

// if(!empty($num)){
//     echo 1;
// }else{
//     echo 2;
// }

// $x='';
// if(empty($x)){
//     echo 'abc';
// }else{
//     echo 'bingo';
// }


/*

===========================================================
*/

//loops
///
//for , while ,do while,  foreach...

// for ($x = 0; $x<3; $x++){
//     echo $x.'<br>';
// }

for($x = 0; $x < 5; $x ++){

    echo $x. '<br>';
}

echo '<hr>';
echo $x;