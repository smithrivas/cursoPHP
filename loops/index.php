<?php
/*
for($i=0; $i<=10; $i++){
  echo $i.'</br>';
}

$i=1;
while($i<=10){
  echo $i.'</br>';
  $i++;
}

$i=1;
do{
  echo $i.'</br>';
  $i++;
}while($i<=10);
*/

$names=['Alex','Elizabeth','Laura'];
foreach ($names as $name){
  echo $name.'</br>';
}
foreach ($names as $key=>$name){
  echo $key.'-'.$name.'</br>';
}

?>
