<?php

use PgSql\Lob;

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


//$this

// class Words {
//     public $str = 'Hello';

//     public function render(){
//         return $this->str . 'World';

//     }

// }

// $word = new Words();

// echo $word->render();

// class Hash{

//     public function salt(){
//         return $this->mix() . '123' . $this->mix();
//     }

//     public function mix(){
//         return '#$#$$';
//     }
// }

// $hash = new Hash();

// echo $hash->salt();

/// child class

///
//אם המחלקה בן צריך מאפיינים ומתודות מהמחלקה אבא
///אם מחלקה בן צריכה לעשות שינויים והתאמות ממחלקה אבא או תוספות


// class DB{
//     public $link = 'My link value';

//     public function connect(){
//         return 'connected';
//     }
// }

// class MysqlDB extends DB {
   
//     public function sql(){
//         return 'sql run!';
//     }


// }

// $db = new MysqlDB();
// echo $db->connect();
// echo '<hr>';
// echo $db->link;
// echo '<hr>';
// echo $db->sql();


// class Request {

//     public $api = 'domain.com';

//     public function run(){
//         return $this->api;
//     }


// }


// class FormRequest extends Request{

//     public function getForm(){
//             return 'This is my form';
//     }
// }

// $form = new FormRequest();

// echo $form->api;
// echo '<hr>';
// echo $form->run();
// echo '<hr>';
// echo $form->getForm();




// class A {
//     public $id = 6;
    
//     public function output(){
//         return 'This ID is: ' . $this->id;
//     }
// }

// class B extends A {

//     public $id = 15;

// }

// $a= new A();
// $a->id = 'hi';


// class  A {
//     public $data = 'hi';
// }


// class B extends A{
//     public $data = 'hello';
// };

// class C extends B{}


// $c = new C();

// echo $c->data;



//scope resultion operator
//parent::

// class Request{
//     public function get(){
//         return 'do very important things';
//     }
// }

// class FormRequest extends Request {

//     public function get(){
//         return parent::get() . 'and more stuff';
//     }
// }

// $request = new FormRequest();
// echo $request->get();


// class A {
//     public $var = 'Hello World';

//     public function returnVar(){
//         return 'A: ' . $this->var;
//     }

// }

// class B extends A{
//     public function returnVar(){
//         return 'B: ' . $this->var;
//     }
// }

// class C extends B{
//     public function returnBatman(){
//         return 'C:' . $this->returnVar();
//     }
// }

// $object = new C();
// echo $object->returnVar();



// class Car{
//     public $license_id = '1232323';

//     public $km_used = 232323234;



// }


// class ElectricCar{

//     public $voltage = 220;

// }



//public
//protected
//private

// class Cost{

//     private $cost;
//     public $myStr;
//     protected function set_cost($cost){
//         return $this->cost = $cost;
//     }
// }


// class LocalCost extends Cost{

//     protected $vat;
//     public function set_vat($vat = 0){
//         return $this->vat = $vat;
//     }

//     public function get_local_cost($cost=0){
//         return ($this->vat * $this->set_cost($cost)+ $cost);
//     }

  
// }

// $foo = new LocalCost();
// $foo->set_vat(0.18);
// echo $foo->get_local_cost(54);


//trait

trait Foo{
    public $id = 5;
    public function init(){
        return $this->id;
    }

    public $worker_name = 'moshe';
    public function get_worker_name(){
        return $this->worker_name;
    }
}

trait Abc{
    public function fn(){
        return 'Hello World';
    }
    public function get_worker_name(){
        return 'hi my name is israel';
    }
}


class Person {
    public $name = 'avi';
}

class IsrPerson extends Person{
   use Abc;
   use Foo {
    Abc::get_worker_name insteadOf Foo;
   }


    public function more(){
        return 123;
    }
}

$ob = new IsrPerson();
echo $ob->init();
echo '<hr>';
echo $ob->fn();
echo '<hr>';
echo $ob->name;








?>