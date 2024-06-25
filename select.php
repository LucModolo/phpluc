<!DOCTYPE html>
<html lang="en">
<head>
<title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

    <div class="container">
      <div class="jumbotron">
        <h1>Bootstrap Tutorial</h1>
        <p>Bootstrap is the most popular HTML, CSS, and JS framework for developing
        responsive, mobile-first projects on the web.</p>
      </div>
      <p>This is some text.</p>
      <p>This is another text.</p>
    </div>

<?php



$sql_statement = "SELECT name, vorname, Strasse FROM Luc";


$mysqli = new mysqli("localhost", "Luc", "Password1", "Luc", 3306);

if ($mysqli->connect_errno ) {
    echo "Failed to connect to MySQL: " . $mysqli->connect_error;
    exit();
}

$result = $mysqli->query($sql_statement);

if ($result) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row['name'] . "</td></tr>";
        echo " " ;
        
        echo "<tr><td>" . $row['vorname'] . "</td></tr>";

        echo "<tr><td>" . $row['Strasse'] . "</td></tr>";

    }
$result->free();
} else {
    echo "Error: " . $sql . "<br>" . $mysqli->error;
} 


$mysqli->close();



