

<?php include 'components/head.inc.php'; ?>    
    
<?php
?>
<div class="container">
<div class="jumbotron">
  <h1>Bootstrap</h1>
  <p>Bootstrap is the most popular HTML, CSS, and JS framework for developing
  responsive, mobile-first projects on the web.</p>
</div>

</div>

<?php
$mysqli = new mysqli("localhost", "Luc", "Password1", "Luc", 3306);

$query = "SELECT id, name, vorname, Strasse FROM Luc";


if ($result = $mysqli->query($query)) {

    /* fetch associative array */
    while ($row = $result->fetch_assoc()) {
        $field1name = $row["id"];
        $field2name = $row["name"];
        $field3name = $row["vorname"];
        $field4name = $row["Strasse"];
    
        echo '<b>'.$field1name.$field2name.'</b><br />';
        echo $field3name.'<br />';
        echo $field4name.'<br />';
    }

    /* free result set */
    $result->free();
} else {
    echo "Error: " . $sql . "<br>" . $mysqli->error;
} 


$mysqli->close();
