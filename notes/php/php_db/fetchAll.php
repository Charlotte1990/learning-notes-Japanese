<?php

define('DB_DATABASE', 'dotinstall_db');
define('DB_USERNAME', 'dbuser');
define('DB_PASSWORD', 'admin');
define('PDO_DSN', 'mysql:dbhost=localhost;dbname=' .DB_DATABASE);

try{

    //connect
  $db = new PDO(PDO_DSN, DB_USERNAME, DB_PASSWORD);
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//select all
//$stmt = $db->query("select * from users");

//条件付き抽出
//$stmt = $db->prepare("select name from users where name like ?");
//$stmt->execute(['%t%']);

$stmt = $db->prepare("select score from users order by score desc limit ?");
$stmt->bindvalue(1, 2, PDO::PARAM_INT);
$stmt->execute();

$users = $stmt->fetchAll(PDO::FETCH_ASSOC);
foreach ($users as $user){
  var_dump($user);
}
echo $stmt->rowCount() . "records found.";


//disconnect
$db = null;

}catch(PDOException $e){
 echo $e->getMessage();
 exit;

}
