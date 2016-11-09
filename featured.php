<!DOCTYPE html>
<html>
  <head>
    <title> FEATURED </title>
    
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="project.css">
    <style>
    .wrapper{display:inline-block;
      margin-left: 150px;
      margin-top: 50px;
      border-radius: 6%;
       height:350px;
      }

    .imgz{
      width:250px;
      height:350px;
      
      border: 6px solid black;
      box-shadow: 0 5px 5px 8px rgba(0,0,0,0.24), 0 3px 3px 3px rgba(0,0,0,0.19);
      border-radius: 6%;
      
      z-index: 0;
  -webkit-transition: all 300ms;
  -moz-transition: all 300ms;
  transition: all 300ms;
  max-width: 100%;
    }
    .imgz:hover {
      border: 6px solid darkgreen;
      -webkit-transform: scale(1.1);
  -moz-transform: scale(1.1);
  transform: scale(1.1);
  filter:opacity(70%);
  filter: blur(2px);
    }
#a1:hover > #b1{opacity: 1;-webkit-transition: all 300ms; }
#a2:hover > #b2{opacity: 1;-webkit-transition: all 300ms;}
#a3:hover > #b3{opacity: 1;-webkit-transition: all 300ms;}
#a4:hover > #b4{opacity: 1;-webkit-transition: all 300ms;}
#a5:hover > #b5{opacity: 1;-webkit-transition: all 300ms;}
#a6:hover > #b6{opacity: 1;-webkit-transition: all 300ms;}
    .text{
      margin-left: 60px;
      position: absolute;
      
      
      bottom:170px;
      z-index: 100;
      font-size: 30px;
      opacity: 0;
    }
    .text1{
      
      position: absolute;
      margin-left:63px;
      text-align: center;
      bottom:-250px;
      z-index: 100;
      font-size: 30px;
      opacity: 0;
    }
    .text2{
      
      position: absolute;
      margin-left:65px;
      text-align: center;
      bottom:-250px;
      z-index: 100;
      font-size: 30px;
      opacity: 0;
    }

    .fbuttonx{
    background-color: #333333;
    color: green;
    border: 2px solid green; /* Green */
    border-radius: 4px;
    padding: 4px 12px;
    text-align: center;
    display: inline-block;
    font-size: 13px;
    position: relative;
    bottom:3px;
}
.fbuttonx:hover{
    background-color:green; /* Green */
    color: white;
    box-shadow: 0 3px 3px 0 rgba(0,0,0,0.24), 0 3px 3px 0 rgba(0,0,0,0.19);
    cursor: pointer;
    transition:0.2s ease-in-out;
    transform:scale(1.1);

}

ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    border: 2px solid darkgreen;
    background-color: darkgreen;
        }
</style>
  </head>



   <body style="background-color:  #333333">
    <div><a href="project.php"><img src="Bookfarms_logo.jpg" alt="logo" height=100 width =500></a>
      <div class="loginform" >
        <form method="POST" action="project.php">
<pre>

</pre>
           </form></div>
      
      </form>
      <?php
session_start(); 
//session_destroy();
$error=''; 
if (isset($_POST['l_login'])) {
if (empty($_POST['username']) || empty($_POST['password'])) {
$error = "Username or Password is invalid";

}
else
{

$username=$_POST['username'];
$password=$_POST['password'];

$connection = mysql_connect("localhost", "root", "");


$db = mysql_select_db("test", $connection);

$query = mysql_query("select * from table3 where password='$password' AND username='$username'", $connection);
$rows = mysql_num_rows($query);
if ($rows == 1) {
$_SESSION['login_user']=$username; 
echo $rows['email'];

} else {
$error = "Username or Password is invalid";
echo $error;
}
$p="float:right;";
while($row = mysql_fetch_array($query, MYSQL_ASSOC)) {
       echo " <pre>                                                                                                                                     <b>   LOGGED IN :   {$row['first_name']}</b></pre>";
       
mysql_close($connection);
}
}
}
?>
    </div>
    <ul id="home">
  <li><a class="m1" href="project.php">Home</a></li>
  
  <li><a class="m1" href="about_us.html">About Us</a></li>
  <li class="dropdown m1">
<a href="search.php" class="drop-button">Search by</a>
    <div class="dropmenu">
      <a href="search.php">Genre</a>
      <a href="search.php">Popularity</a>
      <a href="search.php">Name</a>
        <li><a class="m1" href="map4.php">Book Stores</a></li>

    </div>
  </li>
  <li class="button dropdown">
    <a href="#" class=" icon"> <i class="material-icons" >perm_identity</i> </a>
    <div class="dropmenu d1 m1">
      <a href="feedback.html" >Feedback</a>
      <a href="#">Log Out</a>
      <a href="#">Account Settings</a>
    </div>
  </li>
</ul>
<br>
<div class="wrapper" id="a1" >
  <a href="#">
    <img src="b1.jpg" class="imgz"></a>
    <div class="text " id="b1">
        <pre style="text-align:center"> <i class="material-icons" style="font-size:70px;color:#DAA520">grade</i>
<span style="font-weight: bold;"> 8.7/10</span></pre> 
    </div>


</div>
<div class="wrapper" id="a2" >
  <a href="#">
    <img src="b2.jpg" class="imgz"></a>
    <div class="text " id="b2">
        <pre style="text-align:center"> <i class="material-icons" style="font-size:70px;color:#DAA520">grade</i>
 <span style="font-weight: bold;">9.8/10</span></pre>
    </div>


</div>
<div class="wrapper" id="a3" >
  <a href="#">
    <img src="b3.jpg" class="imgz"></a>
    <div class="text " id="b3">
        <pre style="text-align:center"> <i class="material-icons" style="font-size:70px;color:#DAA520">grade</i>
 <span style="font-weight: bold;">9.0/10</span></pre> 
    </div>


</div>
<br>
<div class="wrapper" id="a4" >
  <a href="#">
    <img src="b4.jpg" class="imgz"></a>
    <div class="text1 " id="b4">
       <pre style="text-align:center"> 

<i class="material-icons" style="font-size:70px;color:#DAA520">grade</i>
 <span style="font-weight: bold;">9.5/10</span></pre>
    </div>


</div>
<div class="wrapper" id="a5"  >
  <a href="#">
    <img src="b5.jpg" class="imgz"></a>
    <div class="text2 " id="b5">
        <pre style="text-align:center" > <i class="material-icons" style="font-size:70px;color:#DAA520">grade</i>
 <span style="font-weight: bold;">8.8/10</span></pre> 
    </div>


</div>
<div class="wrapper" id="a6" >
  <a href="#">
    <img src="b6.jpg" class="imgz"></a>
    <div class="text2 " id="b6">
      <pre style="text-align:center"> 
  <i class="material-icons" style="font-size:70px;color:#DAA520">grade</i>
 <span style="font-weight: bold;">9.3/10</span></pre>
    </div>


</div>
</div>
</body>
</html>