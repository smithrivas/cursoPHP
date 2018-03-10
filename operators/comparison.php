<?php
$v1 = '11';
//$v2 = 12;
$v2 = '12';

//== igual valor /=== igual valor y tipo de dato
//$result = $v1===$v2;
$result = $v1!=$v2;

//spaceship *surgió en PHP7
//Si resultado es igual = 0, si el primero es menor = -1, si el primero es mayor = 1

$result = $v1 <=> $v2;
var_dump($result);
?>
