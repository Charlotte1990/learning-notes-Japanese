<?php
// if　分岐

$score = 55;

if($score > 80) {
  echo "great!";
} 
else if ($score >60) {
  echo "good!";
} 
else {
 echo "so so...";
}

// 真偽値
/*
 falseになる場合
 文字列：　空、"0"
 数値：　0, 0.0
 倫理値: false
 配列；　要素の数が0
*/

$x=5;
if ($x) {
echo "true";
}

//三項演算子
$a=30;
$b=40;
$max = ($a > $b) ? $a : $b;
echo($max);

#switch条件分岐
$signal = "green";

switch ($signal ) {
 case "red": 
    echo "stop!";
    break;

case "blue": 
case "green": 
    echo "go!";
    break;

case "yellow": 
    echo "caution!";
    break;

default: 
    echo "wrong signal";
    break;
}

