<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "author";


	$conn = new mysqli($servername, $username, $password, $dbname);

	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	
	$name = $_POST['name'];
	$aname = $_POST['aname'];
	$pass = $_POST['pass'];
	$mnumber = $_POST['mnumber'];

	$sql = "INSERT INTO author (name,aname,pass,mnumber)
	VALUES ('$name','$aname','$pass','$mnumber')";

	if ($conn->query($sql) === TRUE) {
		echo "data insert";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();
?> 