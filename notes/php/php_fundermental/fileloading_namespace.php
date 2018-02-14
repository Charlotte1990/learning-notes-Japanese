<?php

//外部ファイル読み込み
//require :fatal error
//require_once
#require "User.class.php";

//include: warning
//include_one
#include "User.class.php";

//autoload

/*
spl_autoload_register(function($class){
  require $class . ".class.php";
});
*/

//名前空間
require "User.class.php";

//use Dotinstall\Lib as Lib;
use Dotinstall\Lib;

$bob = new Lib\User("Bob");
$bob ->getMessage();