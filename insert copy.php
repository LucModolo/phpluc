<?php

$mysqli = new mysqli("localhost", "Luc", "Password1", "Luc", 3306);


$_fields1 = $mysqli->real_escape_string($_POST['fields1']);
$_fields2 = $mysqli->real_escape_string($_POST['fields2']);
$_fields3 = $mysqli->real_escape_string($_POST['fields3']);
$_fields4 = $mysqli->real_escape_string($_POST['fields4']);


/**
 * Inserts a new record into the 'Luc' table with the provided field values.
 *
 * @param string $_fields1 The value for the 'id' column.
 * @param string $_fields2 The value for the 'name' column.
 * @param string $_fields3 The value for the 'vorname' column.
 * @param string $_fields4 The value for the 'strasse' column.
 */
$query = "INSERT INTO Luc (id, name, vorname, Strasse) VALUES ('$_fields1', '$_fields2', '$_fields3', '$_fields4')";



/**
 * Executes the SQL query to insert a new record into the 'Luc' table with the provided field values.
 *
 * @return bool True if the query was executed successfully, false otherwise.
 */
$mysqli>query($query);
$mysqli->close();
