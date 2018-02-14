<?php

 // echo htmlspecialchars("hi!" . $_GET['name'], ENT_QUOTES, "utf-8");   //'name'‚Íhtml‚Ìinput‚Ìvalue
  
  $rs = array(
  
     "message" => htmlspecialchars("hi!") . $_GET['name'], ENT_QUOTES, "utf-8",
     "length" => strlen($_GET['name'])
  
  );
  
  header('Content-Type: application/json; charset=utf-8');
  echo json_encode($rs);                                               //json‚Å•¡”‚Ì’l‚ğæ‚éB