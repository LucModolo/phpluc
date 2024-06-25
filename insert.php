<?php


$mysqli = new mysqli("localhost", "Luc", "Password1", "Luc", 3306);

// Don't forget to properly escape your values before you send them to DB
// to prevent SQL injection attacks.


$field1 = $mysqli->real_escape_string($_POST['field1']);
$field2 = $mysqli->real_escape_string($_POST['field2']);
$field3 = $mysqli->real_escape_string($_POST['field3']);

$query = "INSERT INTO Luc (id, name, vorname, Strasse)
            VALUES (null,'{$field1}','{$field2}','{$field3}')";

if ($mysqli->query($query) === TRUE) {
    echo "Record inserted successfully";
  } else {
    echo "Error insert record: " . $mysqli->error;
  }


$mysqli->close();

header("Location: index.php");