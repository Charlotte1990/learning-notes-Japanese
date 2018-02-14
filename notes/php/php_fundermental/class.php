<?php

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
/*finally */ public function sayHi() {
      echo "hi, i am $this->name!"; 
  }

public static function getMessage() {
    echo "hello from User class!";
  }
}


class AdminUser extends User {
  public function sayHello() {
     echo "hello from Admin!";
  }
//override
public function sayHi() {
   echo "[admin] hi, i am $this->name!";
  }

}

 User::getMessage(); 

$tom = new User("Tom");
$bob = new User("Bob");

echo User::$count; //2

$steve = new AdminUser("Steve");

echo $tom->name;
$bob->sayHi();
$steve->sayHi();
$steve->sayHello();





