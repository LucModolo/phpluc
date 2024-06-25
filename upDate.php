<?php
$mysqli = new mysqli("localhost", "Luc", "Password1", "Luc", 3306);

if ($mysqli->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  $field1 = $mysqli->real_escape_string($_POST['field1']);
  $field2 = $mysqli->real_escape_string($_POST['field2']);
  $field3 = $mysqli->real_escape_string($_POST['field3']);
  $field4 = $mysqli->real_escape_string($_POST['field4']);
  
  $sql = "UPDATE Luc SET name='$field2', vorname='$field3', Strasse='$field4' WHERE id='$field1'";  


  if ($mysqli->query($sql) === TRUE) {
    echo "Record updated successfully";
  } else {
    echo "Error updating record: " . $mysqli->error;
  }
  
  $mysqli->close();
  ?>


