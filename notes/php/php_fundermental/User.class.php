<?php
namespace Dotinstall\lib;

class User {
 //property
   public $name;
   public static $count = 0;

//cnstructor
  public function __construct($name){
     $this -> name = $name;
     self::$count++;
  }

//method
  public function sayHi() {
    echo "hi, i am $this->name!"; 
  }

  public static function getMessage() {
    echo "hello from User class!";
  }
}
