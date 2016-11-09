<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$db = "form";
	$conn = mysqli_connect($servername, $username, $password,$db);

$pswd=$_POST["password"];
$uname = $_POST["username"];
$sql = "SELECT username,password FROM table3 where username='$uname'";
$result = mysqli_query($conn, $sql);
//$rows =mysqli_num_rows($result)
$row = mysqli_fetch_assoc($result);
echo $row["username"]." ".$row["password"]."<br>";
echo $uname." ".$pswd."<br>";
if($uname == $row["username"]&& $pswd ==$row["password"]){
	echo "valid login";
	$str="You have successfully logged in ";
    echo  "<script type='text/javascript'>alert('$str');</script>";header('Location: http://localhost/project.php');
}
else{
	echo "invalid login";
}
 /*if($uname==$row["username"] && $password==$row["password"])
 { echo "<br>valid login! yaaay<br>";}// header('Location: http://localhost/WT Project/index.html');}
else 
 { echo "<br>invalid login!!<br>";
    $str="Invalid user Id or password! Try again.";
    echo  "<script type='text/javascript'>alert('$str');</script>";
    
   //header('Location: http://localhost/WT Project/login.html'); 


}
*/
mysqli_close($conn);
?>

