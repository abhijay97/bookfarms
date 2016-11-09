<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$db = "form";
	$fname =  $_POST["first_name"];
	$lname =  $_POST["last_name"];
	$uname =  $_POST["username"];
	$pswd =  $_POST["password"];
	$cpswd =  $_POST["cpassword"];
	$mail =  $_POST["email"];
	$date =  $_POST["date"];
	$month =  $_POST["month"];
	$yr =  $_POST["year"];
	$mno =  $_POST["m_no"];
	$conn = mysqli_connect($servername, $username, $password,$db);

	if (!$conn) {
    	die("Connection failed: " . mysqli_connect_error());
	}

	$sql = "INSERT INTO table3 (first_name, username,password,email)
	VALUES ('$fname','$uname','$pswd','$mail')";

	if (mysqli_query($conn, $sql)) {
    	echo "you have been successfully registered";header('Location: http://localhost/project.php');
	} 
	else {
    	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}

mysqli_close($conn);

	
	
?>