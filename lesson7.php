<?php



// regular expresions

/// לבדוק האם תו או מחרוזת נמצאים במחרוזת
// ולידציה
/// החלפת תו או תווים במחרוזת לפי תבנית
/// שליפת מחרוזת מתוך מחרוזת לפני תבנית

// $str = 'ab7cd5efs6sfg';
// $pattern = "/\d+/";

// ///  if there is a match - 1, if no match - 0 , if error - false;


// $is_validated = preg_match($pattern, $str);

// if($is_validated){
//   echo 'you are validated';
// }else{
//     echo 'you must enter at least one number';
// }

// $str = '456-t23';
// $pattern = "/[a-z]/i";

// $is_validated = preg_match($pattern, $str);

// if($is_validated){
//   echo 'you are validated';
// }else{
//     echo 'you must enter at least one charecter';
// }

/// regular expression phone number

// 0521234567
// 021234567

// must begin with 0
//second charecter 2-9

// $phone ='05033456723';
// $pattern = "/^0[2-9]\d{7,8}$/";


// if(preg_match($pattern, $phone)){
//     echo 'please fill your phone number';
// }else{
//     echo 'thank you';
// }

//nir ^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-]+)(\.[a-zA-Z]{2,5}){1,2}$
//liron  [a-z0-9]+@[a-z]+\.[a-z]{2,3}
/// .nadav.i@gmail.com


// $str = 'adgdg4232.!@#^65656';

// $pattern = "/\[0-9]+/";

// echo preg_replace($pattern, '-',$str,1, $amount);
// echo '<hr>';
// echo $amount;

$str = '8987-hello-hi-abobo-what-100';

$pattern = "/[a-z]+/";
echo preg_match_all($pattern, $str, $words);

echo "<pre>";
print_r($words[0]);