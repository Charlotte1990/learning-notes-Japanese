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


$stmt->bindParam(2, $score, PDO::PARAM_INT);
$score = 52;
$stmt->execute();

$score = 67;
$stmt->execute();

$score = 89;
$stmt->execute();


//disconnect
$db = null;

}catch(PDOException $e){
 echo $e->getMessage();
 exit;

}
