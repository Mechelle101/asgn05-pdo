<?php

include 'connect.php';

//$stmt = $db->prepare("SELECT * FROM names WHERE id = ? && firstname = ?");
//$stmt = $db->prepare("SELECT * FROM names WHERE firstname = ?");
$stmt = $db->prepare("SELECT * FROM names WHERE firstname = :firstname");
//$id = 3;
//$names = array('Andy', 'Brian', 'Godfrey');
//$names = array('Hettie', 'Emma', 'Freddie');
//$name = 'Godfrey';

//use bind value to bind our search string to the placeholder ?
//$stmt->bindParam(1, $id);

//foreach($names as $name) {
//$stmt->bindParam(':firstname', $name);
  //$stmt->bindValue(2, 'Colin');
  $stmt->bindValue(':firstname', 'Andy', PDO::PARAM_STR);

  $stmt->execute();

  while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {

    $firstname = htmlentities($row['firstname']);
    $lastname = htmlentities($row['lastname']);
    $postcode = htmlentities($row['postcode']);

     echo $firstname . " " . $lastname . " " . $postcode . "<br>";
  }
//}

?>
