<?php

//配列
// key value

/*$sales = array (
  "bao" => 200,
  "fkoji"=> 800,
  "tamura"=> 600
);
*/

//PHP5.4
$sales = [

 "bao" => 200,
 "fkoji"=> 800,
 "tamura"=> 600
];
var_dump ($sales["bao"]);
$sales["tamura"]= 300;
var_dump ($sales["tamura"]);

$colors =["red", "blue" , "pink"];
var_dump ($colors[0]);

$fruits =["apple", "pear" , "orange"];
var_dump ($fruits[0]);

//foreach 
foreach ($sales as $key => $value) {
  echo "($key) $value ";
}

foreach ($colors as $value) {
  echo "$value ";
}

//foreach　if while for コロン構文
foreach ($fruits as $value) :
  echo "$value ";
endforeach;

?>
<ul>
   <?php foreach ($colors as $value): ?>
   <li><?php  echo "$value"; ?></li>
   <?php endforeach; ?>
</ul>


