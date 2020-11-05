<?php

include 'connect.php';

$stmt = $db->query("SELECT * FROM names");

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach($results as $row) {

  $firstname = htmlentities($row['1']);
  $lastname = htmlentities($row['2']);
  $postcode = htmlentities($row['3']);
  
   echo $firstname . " " . $lastname . " " . $postcode . "<br>";
  
}

?>