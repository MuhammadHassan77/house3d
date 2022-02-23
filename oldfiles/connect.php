<?php 

	$host = "localhost";
	$user = "root";
	$pass = "";
	$db = "my_testing";

	$mysqli = mysqli_connect($host, $user, $pass, $db);  /*DATABSE*/
	if (!$mysqli){
		# code...
		echo "Connect Successfully" . mysqli_connect_error();
	}
?>