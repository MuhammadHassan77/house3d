<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "house_db";

// $host = "localhost";
// $user = "u538897927_house_db";
// $pass = "Gy[6RJyCF7iJ";
// $db = "u538897927_house_db";
global $mysqli;
$mysqli = mysqli_connect($host, $user, $pass, $db);  /*DATABSE*/
if (!$mysqli) {
	echo "Connect Successfully" . mysqli_connect_error();
}
