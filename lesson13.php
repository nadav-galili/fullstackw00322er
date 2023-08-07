<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
///oop  object oriented programing

//one word
// class Demo{}

//two words
// class RequestForm{}

//initials
// class DB{}



//  class BatMan{
//     //var , public, protected, private
//     public $int = 5,
//            $price = 7.5,
//            $isLogin = true,
//            $data = null,
//            $info = [10, 20];
// };

// $ob = new BatMan();
// unset($ob->price);






// if(property_exists('Batman', 'name')){
//     echo $ob->name;
// }else{
//     echo 'property doesent exist';
// }

// class Request{
//     public $str = 'myString';
//     public $num = 5;
// }

// $ob = new Request();

// echo $ob->str. '<br>';
// echo $ob->num;



// class Demo{
//     public $name = 'avi',
//            $age = 36;

//   function displayName($str){
//     return $str;
//   }
//  }

//  $a = new Demo();
//  echo $a->displayName('hello');


// class MyForm {

//     public $id = 'form-5';

//     public function edit(){
//         return 'form edited';
//     }
// }


// $myNewObject = new MyForm();

// $myNewObject->url = 'domain.com';
// echo $myNewObject->url;
// echo '<br>';
// $myOb = new MyForm();
// echo '<pre>';
// print_r($myOb);
// echo '</pre>';

// echo $myNewObject->id;
// echo '<hr>';
// $myNewObject->id = 'foo';
// echo $myNewObject->id;

// $myNewObject->edit = function(){};
// $myNewObject->edit();


// $db = new DB();

// $x = 'hi';


// $db->$x = 'Hello';
//$db->hi = 'hello';
// echo $db->hi;



// $key = 'password';
// $db->$key = '123456';

// echo $db->password;


// class DB{

// }


// $data = [
//     'host'=>'localhost',
//     'user'=>'root',
//     'password'=>'1234',

// ];

// $db = new DB();

// foreach($data as $key=>$value){
    
//         $db->$key = $value;

    
// }

// echo '<pre>';
// print_r($db);
// echo '</pre>';
// die;

// echo $db->host;
// echo '<hr>';
// echo $db->user;





// class HttpRequest{

//     public $url = "https://google.com";

//     public function connect(){
//         return 'Connect to:' . $this->url; 
//     }

// };

// $http = new HttpRequest();
// echo $http->connect();



// class Session {

//     public $status = 200;
    
//     public function getStatus(){
//         return "Status returned from http request is:" . $this->status;
//     }

// }

// $session = new Session();
// echo $session->getStatus();

// class Person {

//     public $id = 6;

//     public function getId(){
//         return $this->id;
//     }

// }

// $person = new Person();
// $person->id = 15;
// echo $person->getId();

// $person2 = new Person();
// echo $person2->getId();


// class Bank{
//     public $account,
//            $withdraw,
//            $balance;

//     public function openAccount(){
//         $this->account = 0;
//     }

//     public function withdraw(){
//         $this->balance = $this->account - $this->withdraw;
//         return $this->balance;
//     }

//     public function intreset(){
//         $intrest = $this->withdraw * 0.1;
//         $this->balance = $this->balance + $intrest;
//         return $this->balance;
//     }
    
// }

// $account = new Bank();
// $account->openAccount();
// $account->withdraw = 200;

// echo "Your balance :" . $account->intreset() . "$";




class DB {

    public $link;

    public function connect($db){
        $this->link = mysqli_connect('localhost', 'root', '',$db );
        return $this->link;
    }

    public function close(){
        mysqli_close($this->link);
    }


}