<?php

 // echo htmlspecialchars("hi!" . $_GET['name'], ENT_QUOTES, "utf-8");   //'name'はhtmlのinputのvalue
  
  $rs = array(
  
     "message" => htmlspecialchars("hi!") . $_GET['name'], ENT_QUOTES, "utf-8",
     "length" => strlen($_GET['name'])
  
  );
  
  header('Content-Type: application/json; charset=utf-8');
  echo json_encode($rs);                                               //jsonで複数の値を取る。