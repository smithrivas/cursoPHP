<?php
$dbname = 'cursophp';
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';

$pdo = new PDO("mysql:host=$dbhost;dbname:$dbname","$dbuser","$dbpass");
if ($pdo) {
  echo '<h1 style="color: green">Conexión exitosa.</h1>';
}else {
  echo '<h1 style="color: red">Conexión exitosa.</h1>';
}
?>
