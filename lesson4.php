<?php

//loops
///
//for , while ,do while,  foreach...

// for ($x = 0; $x<3; $x++){
//     echo $x.'<br>';
// }

// for($y=2;$y<=6;$y+=2){


// }

// echo '<hr>';
// echo $y;

// echo '<ul>';

// for ($x=1;$x<=7;$x+=2){

//     echo "<li>Item $x</li>";
// }

// echo '</ul>';

// echo '<ul>';
// for($x=15;$x >=3;$x -=3 ){
//     if($x !=9){
//         echo "<li> $x</li>";

//     }
// }

// echo '</ul>';

// while

// $x = 1;

// while($x <4){
//     echo "$x <br>";
//     $x++;
// }

// echo '<hr>';
// echo $x;


// $y = 4;

//     while( $x=$y ){
//         echo $x .'<br>';
//         $y--;
//     }


    // while( $row = mysqli_fetch_assoc($result)){
    //      echo $row['name'];
    // }

//======================================================
// alternative syntax

//if else, else if, while, for, switch case


// ========================================
//  PHP functions
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


// edit_form();


// function edit_form(){
//     echo 'hello';
// }


// $user = 'avi cohen';

// function output_user_details(){
//     $user = 'moshe';
//     return 'The user name is: '. $user;
// }


// echo output_user_details();
// echo '<hr>';
// echo $user;


// $num = 3;

// function num_numi(){
//     $num = 8;
// }
// echo num_numi();

// echo $num;

// $user = 'avi';


// function output(){
// global $user;
// $my_user = $user;
// $my_user .=  'hello world';
// // $user = 'moshe';
// $str = 'the user is:' .$my_user;
// return $str;
// }

// $res = output();
// echo $res;
// echo '<hr>';
// echo $user;



// function output(){
//     'hello world';
// }

// $res = output();
// echo $res;
// var_dump( $res);


// function add($num1,$num2 = 0){
//     return $num1 + $num2;
// }

// echo add(4);


// function permalink($title){
//     $title = trim($title);
//     $title = strtolower($title);
//     return str_replace(' ','-',$title);
// }

// echo permalink( ' Dell pro xY z 15');
// echo '<hr>';
// echo permalink( ' Asus z t Pro 17 Y');
// echo '<hr>';
// echo permalink();


// echo rand();
// echo '<br>';
// echo getrandmax();

// echo str_replace();
//=========================================================






// $x = 3;
// $y = 8;

// function swap(&$num1, &$num2){
// $tmp = $num1;//$tmp = 3
// $num1 = $num2;//$x = 8, $y = 8
// $num2 = $tmp;//$y = 3;
// }

// swap($x, $y);
// echo "\$x: $x <br>"; //8
// echo "\$y: $y <br>"; //3
// $counter = 0;

// $str = 'Hello! man! whats up! hi!';
// $res = str_replace('!', '?', $str, $counter);
// echo $res;
// echo '<hr>';
// echo $counter;



// function hook_nadav(&$str){
//     $str .= ' World';
// }

// $x = 'Hello';
// hook_nadav($x);
// echo $x;

// function adder(&$num){
//     $num++;
// }

// $y = 3;
// adder($y);
// echo $y;

////==============================================
//anonymos function PHP>= 5.4




// $fn = function(){
//     return 'hello';
// };

// echo $fn();
// echo '<hr>';
// $res = $fn();
// echo $res;


$a = function($num){
    return $num * 2;
};

function alli($fn){
    return $fn(3) + 4;
}

echo alli($a);













?>