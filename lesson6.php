<?php
//array functions

// $data = ['Article1', 'Article2', 'Article3'];

// shuffle($data);
// echo "<pre>";
// print_r($data);

// $names = ['אבי', 'משה', 'בילי', 'אהרון'];
// sort($names);
// echo "<pre>";
// print_r($names);

//======================================
//Array iteration

// $nums = [10,20, 30];
// $len = count($nums);
// echo count($nums);

// echo $nums[$x];

// for($x = 0; $x < $len; $x++){
//     echo $nums[$x].'<br>';
// }

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// $user = [
//     'name'=> 'avi', 
//     'age'=> 55,
//     'phone'=> '03992223345'
// ];



// foreach($user as $index => $value){
//     echo ucfirst($index).'-'. $value . '<br>';
// }



// $data =[
//     [10, 20 , 30 ],
//     'hi',
//     [40, 50],
//     34,
// ];

// foreach($data as $item){
    
//     if(is_array($item)){
//         foreach($item as $val){
//             echo $val . '<br>';
//         }
//     }else{
//         echo $item . '<br>';
//     }
    

// }



//amdeos api

// $data = [
//     [[['a'=>[[10]]]]],
//     20,
//     [[[[[[30]]]]]],
//     [[[40, 50]]],
//     ['b'=>['c'=>60]],
// ];

// foreach(get_values($data) as $item){
//     echo "$item <br>";
// }


// function get_values($array){
//     static $data = [];

//     foreach($array as $value){
//         if(is_array($value)){
//             get_values($value);
//         }else{
//             $data[]= $value;
//         }
//     }

//     return $data;
// }
// $a = 'avi';

// "hello world $avi";


// $name = 'Avi cohen';
// $phone = '0545454646';


// ///herdocs
// ///nowdoc
// $ms =<<<EOT
// <h3 style='color:green'>user's name $name</h3>
// <p style="font-size:40px;color:red">users phone $phone</p>
// EOT;
// echo $ms;

// $str = 'Hello';
// $len = strlen($str);
// echo $str[5];

// for ($x=0; $x <$len; $x++){
//     echo $str[$x] . '<br>';
// }

// echo str_random();
// echo '<hr>';
// echo str_random(6);

// function str_random($len = 30){

//     $random_string = '';
//     $chars = 'ABCDEFGHJKLMNPQRSTUVWXYZabcdefghjklmnpqrstuvwxyz123456789';
//     $max = strlen($chars)-1;
//     for($x = 0; $x < $len; $x++ ){
//         $random_string .= $chars[rand(0, $max)];
//     }
//     return $random_string;
// }




// unix time

// unix timestamp

// utc

//israel 06/07/2023 | 06.07.2023  d/m/Y
//usa 07/06/2023  | 07.06.2023  m/d/Y
//mysql 2023-06-07 Y-m-d
//unixtime 15458658354654

//now
// echo time();

// ///two weeks ago 
// echo '<hr>';
// echo time() -60*60*24 *14;

// ///one week from now
// echo '<hr>';
// echo time()+60*60*24*7;


// echo date('Y');
// echo '<hr>';
// echo date('y');
// echo '<hr>';
// echo date('d/m/y');
// echo '<hr>';
// echo date('d.m.y');
// echo '<hr>';
// echo date('l');
// echo '<hr>';
// echo date('d/m/Y H:i:s');

// echo date_default_timezone_get();
// echo '<hr>';
// date_default_timezone_set('Asia/Jerusalem');
// echo date('j.n.y H:i:s');

// $date = '2021-04-22 17:34:00';
// $time = strtotime($date);
// echo $time;
// echo '<hr>';
// echo date('d/m/Y H:i:s', $time);


$date1 = '2023-07-10 18:20:00';
$date2 = '2023-07-06 00:00:00';

function get_diff_days($date1, $date2){
    $diff = strtotime($date1) - strtotime($date2);
    $to_days = $diff/ (60 *60 * 24);
    return (int)abs($to_days);
}

$res = get_diff_days($date2, $date1);
echo $res;



?>