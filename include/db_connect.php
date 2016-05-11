<?php
	//server : localhost, database_name : meaieeesb, username : meaieeesb, password : meaieeesb
	$servername = "localhost";
	$username = "akhilarimbra";
	$password = "arimbra";
	$dbname = "akhilarimbra";
	//mysqli object oriented
	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
?>