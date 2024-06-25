<?php

$mysqli = new mysqli("localhost", "Luc", "Password1", "Luc");

echo $mysqli->host_info . "\n";

$mysqli = new mysqli("127.0.0.1", "Luc", "Password1", "Luc", 3306);

echo $mysqli->host_info . "\n";



