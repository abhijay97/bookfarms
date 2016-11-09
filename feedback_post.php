<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$db = "form";
	$conn = mysqli_connect($servername, $username, $password,$db);
	if (!$conn) {
    	die("Connection failed: " . mysqli_connect_error());
	}
	$fname =  $_POST["first_name"];
	$mail =  $_POST["email"];
	$f = $_POST["comment"];
	$sql = "INSERT INTO feedback (name,email,feedback)
	VALUES ('$fname','$mail','$f')";
	if (mysqli_query($conn, $sql)) {
    	echo "you have been successfully registered";header('Location: http://localhost/project.php');
	} 
	else {
    	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
	mysqli_close($conn);

	
	
?>
