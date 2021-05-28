<?php
    $servername = "localhost";
	$dbname = "students";
	$username = "root";
	$password = "";
	
	$conn = new mysqli("localhost", "root", "", "students");
	
	$conn = new mysqli($servername, $username, $password, $dbname); 


	if (mysqli_connect_errno()) {
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
		die();
	}

?>
