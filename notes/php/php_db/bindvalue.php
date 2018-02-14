<?php


define('DB_DATABASE', 'dotinstall_db');
define('DB_USERNAME', 'dbuser');
define('DB_PASSWORD', 'admin');
define('PDO_DSN', 'mysql:dbhost=localhost;dbname=' .DB_DATABASE);

try{

    //connect
  $db = new PDO(PDO_DSN, DB_USERNAME, DB_PASSWORD);
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);



//bindValue()
$stmt = $db->prepare("insert into users (name, score) values (?, ?)");
//$stmt = $db->prepare("insert into users (name, score) values (:name, :score)");

$name = 'taguchi';
$stmt->bindValue(1, $name, PDO::PARAM_STR);
//$stmt->bindValue(':name', $name, PDO::PARAM_STR);

$score = 23;
$stmt->bindValue(2, $score, PDO::PARAM_INT);
$stmt->execute();


$name = 'dotinstall';
$stmt->bindValue(1, $name, PDO::PARAM_STR);
$score = 79;
$stmt->bindValue(2, $score, PDO::PARAM_INT);
$stmt->execute();

$name = 'hou';
$stmt->bindValue(1, $name, PDO::PARAM_STR);
$score = 80;
$stmt->bindValue(2, $score, PDO::PARAM_INT);
$stmt->execute();

$name = 'yamata';
$stmt->bindValue(1, $name, PDO::PARAM_STR);
$score = 56;
$stmt->bindValue(2, $score, PDO::PARAM_INT);
$stmt->execute();


//disconnect
$db = null;

}catch(PDOException $e){
 echo $e->getMessage();
 exit;

}
