<?php

try {
$db = new PDO('mysql:host=localhost;dbname=testdb;charset=utf8', 'mechelle', 'Bri96And98Tyl01');
//var_dump($db);
}

catch(Exception $e) {
//  echo $e->getMessage();
  echo "An error has occurred";
}

?>