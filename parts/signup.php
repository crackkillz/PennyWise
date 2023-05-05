<?php
	//Connect to database
	$servername = "localhost";
	$username = "yourusername";
	$password = "yourpassword";
	$dbname = "yourdatabase";

	$conn = mysqli_connect($servername, $username, $password, $dbname);
	if (!$conn) {
	    die("Connection failed: " . mysqli_connect_error());
	}

	//Process form data
	if(isset($_POST['submit'])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$username = $_POST['username'];
		$password = $_POST['password'];

		//Validate form data

		//Insert data into database
		$sql = "INSERT INTO users (name, email, username, password) VALUES ('$name', '$email', '$username', '$password')";
		if (mysqli_query($conn, $sql)) {
		    echo "New account created successfully";
		} else {
		    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}

		//Close database connection
		mysqli_close($conn);
	}
?>
