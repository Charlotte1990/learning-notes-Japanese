<?php
// 関数
/*
function sayHi($name = "Bob") {
  echo "hi!".$name;
 return "hi!".$name;
}

sayHi("Tom");
sayHi("Jack");
sayHi();

$s= sayHi("Mary");
var_dump($s);
*/

//ローカル変数
/*
$lang= "ruby";

function sayHi($name){
  $lang = "php";
  echo "hi! $name from $lang";
}

sayHi("Tom");
var_dump($lang);
*/

//組み込み関数
$x =5.6;
/*
echo ceil($x); //6
echo floor($x); //5
echo round($x); //6
echo rand(1, 10);
*/

$s1 = "hello"; 
$s2 = "ねこ";   
/*
echo strlen($s1);
echo mb_strlen($s2); //multibyte
printf("%s - %s -%.3f", $s1, $s2, $x);
*/
$colors = ["red", "blue", "pink"];
echo count($colors);
echo implode("0", $colors);
