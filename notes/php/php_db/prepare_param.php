<?php


define('DB_DATABASE', 'dotinstall_db');
define('DB_USERNAME', 'dbuser');
define('DB_PASSWORD', 'admin');
define('PDO_DSN', 'mysql:dbhost=localhost;dbname=' .DB_DATABASE);

try{

    //connect
  $db = new PDO(PDO_DSN, DB_USERNAME, DB_PASSWORD);
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


//parameter
  
 $stmt = $db->prepare("insert into users (name, score) values (:name, :score)");
 $stmt->execute([':name'=>'fkoji', ':score'=>80]);
  echo "inserted: ". $db->lastInsertId();
  

//disconnect
$db = null;

}catch(PDOException $e){
 echo $e->getMessage();
 exit;

}