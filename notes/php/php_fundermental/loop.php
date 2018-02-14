<?php

//ループ処理
//while
//do.....while

/*
$i=0;
while ($i < 10){
  echo $i;
  $i ++;
}
*/

/*
do{
 echo $i;
 $i++;
} while ($i <20);
*/

//for ループ処理
// break: ループを抜ける
//continue: それ以降の処理を実行せずに次のループに移る

for($i = 0; $i<8; $i++){
  if($i ===5){
    //break;
    continue;
  }
  echo $i;
}
