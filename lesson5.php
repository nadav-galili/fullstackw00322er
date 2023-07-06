<?php

/// anonymos function PHP>= 5.4


ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);



// function render($fn){
//     $str = 'Hello' . $fn;
//     return $str;

// }


// render(function(){
//     return 'world';

// });





// $get_correct_image = function($country){
//     if($country == 'nl'){
//         return 'nl.png';
//     }else if($country == 'usa'){
//         return 'usa.gif';
//     }
// };

// function display_image_by_country($get){
//     return $get('usa');
// }

// echo display_image_by_country($get_correct_image);




// $a = function($num){
//     return $num * 2;
// };

// function all_numbers($fn){
//     return $fn(3) + 2;
// }

// echo all_numbers($a);


// $user = 'avi';

// $output = function()use($user){
//     return 'The user Name is: ' . $user;
// };

// echo $output();


// function render(){

//     $num = 16;

//     $a = function() use($num){
//         return 'num is: ' . $num;
//     };

//     return $a();
// };

// echo render();


//currying

// $a=function($num1){
//     return function($num2)use($num1){
//         return $num1 + $num2;
//     };
// };

// echo $a(6)(3);


// function greet($greeting){
//     return function($name) use ($greeting){
//         echo $greeting . ', ' . $name;
//     }
// };


// $greetHello = greet('hello');

// $y = 1;

// $fn1 = fn($x)=>$x+$y;

// echo $fn1(9);


//====================================================

///arrays

//array construct  
// $arr = array();
// //
// //array operator
// $arr = [];

// //1. numeric array
// $nums = array('a','b','c');
// echo $nums[2];

// echo '<hr>';

// $names = ['avi', 'moshe', 'shimi'];

// echo $names[1];

////===========
//associative array
// $user = [
//     'name'=>'Avi Cohen',
//     'email'=>'avi@gmail.com',
//     'city'=>'Tel Aviv',
//     'age'=>20,
// ];


// $user2 = array(
//     'name'=>'yossi',
//     'email'=>'yos@gmail.com',
//     'city'=>'Ramat Gan',
//     'age'=>56,
// );

// echo $user['name'];
// echo '<hr>';
// echo $user2['email'];


// $data = array(5, 
// 'hello',
//   'file'=>'txt',
//   'size'=>4467
// );

// echo $data['file'];

// define('demo','city');

// $x = ['city'=>'Tel Aviv'];

// echo $x[demo];


// $data = ['foo' => 16];
// $x = 'foo';

// echo $data[$x];



// $data = [
//   0=>15,
//   7=>20,
//   10=>30
// ];

// echo $data[1];
// ///
// // echo '<pre>';

// // print_r($data);

// $data = [
//     10=>true,
//     2=>20,
//     17=>null,
//     0=>40,
//     false,
// ];

//CRUD
//Create , read, update, delete
// $user = [
//     'name'=>'avi',
//     'phone'=>'052111444',
// ];

// $user['phone'] = '0322324424';
// $user['city'] = 'Jerusalem';
// echo '<pre>';
// print_r($user);

// $data= array('hello',16, 50.2);
// $data[3] =100;
// $data[] = 200;

// $data[4]=322.55;
// array_push($data, 789, 'hi', 3446, 200);


// $data= array('hello',16, 50.2);
// $data[20] =$data[0];
// unset($data[0]);
// echo '<pre>';
// print_r($data);
// echo '<hr>';


// $info = [
//     'a'=>20,
//     'b'=>30,
//     'c'=>40,
// ];
// unset($info['a']);

// var_dump($info);


$my_data = [3, 9, 25, 38];
array_push($my_data, 55);
$my_data[15]= 99;
$my_data[0] = 6;
unset($my_data[1]);
echo "<pre>";
print_r($my_data);
echo "</pre>";










?>