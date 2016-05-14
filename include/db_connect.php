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
<?php
	/*
	$sql = "SELECT id, firstname, lastname FROM MyGuests";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
	    // output data of each row
	    while($row = $result->fetch_assoc()) {
			echo "$row['id']";
	    }
	} else {
	    echo "0 results";
	}
	$conn->close();
	*/
?>