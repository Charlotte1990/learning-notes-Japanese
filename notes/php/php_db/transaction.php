<?php

define('DB_DATABASE', 'dotinstall_db');
define('DB_USERNAME', 'dbuser');
define('DB_PASSWORD', 'admin');
define('PDO_DSN', 'mysql:dbhost=localhost;dbname=' .DB_DATABASE);

try{

    //connect
  $db = new PDO(PDO_DSN, DB_USERNAME, DB_PASSWORD);
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


//transaction
$db -> beginTransaction();
$db -> exec("update users set score = score - 19 where name = 'yamata'"); 
$db -> exec("update users set score = score + 3 where name = 'dotinstall'"); 
$db -> commit();

}catch(PDOException $e){
    $db->rollback();
    echo $e->getMessage();
    exit;

}
