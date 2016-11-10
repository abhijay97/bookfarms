

<!DOCTYPE html>
<html>
  <head>
    <title> BSRD </title>
    
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="project.css">
  </head>



  <body >
    <div><a href="project.html"><img src="/pics/Bookfarms_logo.jpg" alt="logo" height=100 width =500></a>
      <div class="loginform" >
        <form>
<pre>

</pre>
           <span style="float:right;"><br>
           <button type="submit"class="fbutton" onclick="location.href='register1.html';">Register</button>&nbsp;&nbsp;&nbsp;&nbsp;
          </span>
          <span style="float:right;"><br>
           <button type="submit"class="fbutton">Login</button>&nbsp;&nbsp;&nbsp;&nbsp;
          </span>
          <span style="float:right;">
         Password:<br>
           <input type="password" name="password" placeholder="password" required>&nbsp;&nbsp;&nbsp;&nbsp;<br><br>
          </span>
          <span style="float:right;position:relative">Login id:<br>
         <input type="text" name="login"  placeholder="Enter Id" required >&nbsp;&nbsp;&nbsp;&nbsp;<br></span></form></div>
      
      </form>
    </div>
    <ul id="home">
  <li><a class="m1" href="#home">Home</a></li>
  <li><a class="m1" href="#">Featured</a></li>
  <li><a class="m1" href="#">About Us</a></li>
  <li class="dropdown m1">
    <a href="#" class="drop-button">Search by</a>
    <div class="dropmenu">
      <a href="#">Genre</a>
      <a href="#">Popularity</a>
      <a href="#">Name</a>
    </div>
  </li>
  <li class="button dropdown">
    <a href="#" class=" icon"> <i class="material-icons" >perm_identity</i> </a>
    <div class="dropmenu d1 m1">
      <a href="#" >Feedback</a>
      <a href="#">Log Out</a>
      <a href="#">Account Settings</a>
    </div>
  </li>
</ul>

</br></br></br>

     <div style="background-image:url('usedbooks.jpg');">
     <h1 style="background-color:DarkGreen; color:White; text-align:center " >BUY - SELL BOOKS</h1>
     <form>
        <button type="submit" class="fbutton bsbutton" onclick="location.href=#sell">Sell</button>
        <button type="submit" class="fbutton bsbutton">Request Book</button></br><br><br><br><br>
	<div style="margin-left:10%; margin-right:auto">
     </form>
     <form method="POST" action="buy.php">
	  <input class="buy" placeholder="Search for Colleges / Locations" type="text" style="margin-left:10%">
	  <input class="buy" placeholder="OR Search for any book" type="text">
	  <input type="submit" value="Buy" name="form_submit" class="fbutton buy bsbutton" style="float:none; height:45px"></br></br>
	</div>
       <br><br><br><br>
     </div>
</br></br></br>
     </form>
</form>

 <h1 class='head'>Books on Sale</h1><br><br><br><br><br>

<?php
//display the contents of the table
require_once 'p1.php';
$db_server = mysql_connect($db_hostname,$db_username,$db_password);
mysql_select_db($db_database);
   $query = "SELECT * from onsalebooks";
   $result = mysql_query($query);
   if (!$result) die ("Database access failed: " . mysql_error());
   $rows = mysql_num_rows($result);


   for ($j=0; $j<$rows; $j++) {
     $row = mysql_fetch_row($result);
     echo "<div class='onsalebooks'><br><br>
      {$row[0]}<br>
       {$row[1]}<br>
       {$row[2]}<br>
       {$row[3]}<br>
       {$row[4]}<br>
       {$row[5]}<br>
       {$row[6]}<br>
       {$row[7]}<br>
       {$row[8]}<br>
       <button name='contact' class='fbutton1' style='margin-left:20%'>Interested</button><br></div><br>";
   }
?>

<div class="rhead" id="sell"><em> SELL </em> </div>
	<div class="sfoutline">
		<div class="internal_space">


		<form  method="POST" action="sell.php" >


		<br><strong class="rheadin">Title of the book<span class="required"></span></strong></div>
		<div class="int_div">
			<input type="text" name="title" class="in1" size=69px required>
		</div>

		<div class="internal_space">
		<br><strong class="rheadin">Author<span class="required"></span></strong></div>
		<input type="text" name="author" class="in1" style="margin-left:50px;margin-top: 5px;" size= 69px required >

		<div class="internal_space">
		<br><strong class="rheadin">Your Location<span class="required"></span></strong></div>
		<input type="text" name="school" class="in1" style="margin-left:50px;margin-top: 5px;" placeholder="School/College/Workplace" size= 69px required >
		<input type="text" name="city" class="in1" style="margin-left:50px;margin-top: 5px;" placeholder="City" size= 69px required >

		<div class="internal_space">
		<br><strong class="rheadin">Contact Details<span class="required"></span></strong></div>
		<div class="int_div">
		    <span class="rheadin">E-mail</span><span class="required"></span></br>
		    <input type="text" name="email" class="in1" style="margin-left:50px;margin-top: 5px;" size= 50px required ></br>
		    <span class="rheadin">Mobile No.</span><span class="required"></span></br>
		    <input type="text" name="m_no" class="in1" style="margin-left:50px;margin-top: 5px;" size= 13px value="+91">

		</div>

		<div class="internal_space">
		<br><strong class="rheadin">Price<span class="required"></span></strong></div>
		<input type="text" name="price" class="in1" style="margin-left:50px;margin-top: 5px;" size= 3px required >

		<div class="internal_space">
		<br><strong class="rheadin">Description</strong></div>
		<textarea wrap="on" rows="7" cols="50" style="margin-left:50px;margin-top: 5px;" name="description" placeholder="Other Details (if any)"></textarea>

		<br>
		<br>
		<br>
		<input type="submit" name="form_submit" style="margin-right:50px;float:right;" class="fbutton1">
		
		<br>
		<br>
		
		<br>
		<br>
		
      

		</form>
    <?php
  //$db_server = mysql_connect("localhost", "username", "");
  //if (!$db_server) die("Unable to connect to MySQL: " . msql_error());
  //mysql_select_db('test',$db_server); //bsr $db_database
   //or die("Unable to select database: " . mysql_error());

  // $query = "CREATE TABLE IF NOT EXISTS onsalebooks (
  //            title VARCHAR(100),
   //     author VARCHAR(100),
   //     school VARCHAR(100)
   //     city VARCHAR(100),
   //     email VARCHAR(100),
   //     author VARCHAR(15),
   //     price int,
   //     description VARCHAR(200))";

  //$result = mysql_query($query);
  //if (!$result) die ("Database access failed: " . mysql_error());
require_once 'p1.php';
$db_server = mysql_connect($db_hostname,$db_username,$db_password);
mysql_select_db($db_database);
if(isset($_POST['form_submit'])){
  $title = $_POST['title'];
  $author = $_POST['author'];
  $school = $_POST['school'];
  $city = $_POST['city'];
  $email = $_POST['email'];
  $m_no = $_POST['m_no'];
  $price = $_POST['price'];
  $description = $_POST['description'];
  $query="INSERT INTO onsalebooks (title,author,school,city,email,m_no,price,description) VALUES ('$title','$author','$school', '$city', '$email', '$m_no', '$price', '$description')";

mysql_query($query);
// if (!$result) die ("Database access failed: " . mysql_error());
}

  
  
  


   
  
  //echo <<<_END 
?>

	</div>

</div>

<br>
<br>
<div style="background-color:darkgreen; margin-top:10px;">
<button class="btp fbutton2" onclick="location.href='#home';">Back to top</button>

<div class="connect">
  <strong class="bstrong">Connect With Us</strong>
  <br>
  <br>
  <span class="btext">Facebook</span>
  <br>
  <br>
  <span class="btext">Twitter</span>
  <br>
  <br>
  <span class="btext">Instagram</span>
  <br>
  <br>
  <span class="btext">Google+</span>
</div>

<div class="connect" >
  <strong class="bstrong">Get to Know About</strong>
   <br>
   <br>
  <span class="btext">Books</span>
  <br>
  <br>
  <span class="btext">Authors</span>
  <br>
  <br>
  <span class="btext">Book Stores Near You</span>
  <br>
  <br>
  <span class="btext">New Releases</span>
</div>
<div class="connect" >
  <strong class="bstrong">Let US Help You </strong>
  <br>
  <br>
  <span class="btext">Your Account</span>
  <br>
  <br>
  <span class="btext">Suggested Books</span>
  <br>
  <br>
  <span class="btext">Editor's Choice</span>
  <br>
  <br>
  <span class="btext">FAQs</span>
</div>

<div class="connect" >

  <strong class="bstrong">Write a Review </strong>
  <br>
  <br>
  <span class="btext">Website</span>
  <br>
  <br>
  <span class="btext">Books</span>
  <br>
  <br>
  <span class="btext">Authors</span>
  <br>
  <br>
  <span class="btext">Book Stores</span>
</div>
<br>
<br>
<br>
<div class="cprt">Copyright - 2016 - Book Farms | All rights reserved.</div>

  </div> 
  </div>   
 <script>
  function validatesellform(){
    var mail = document.sell.email.value;
    var atpos = mail.indexOf("@");
    var dotpos = mail.lastIndexOf(".");
    if (atpos<1 || dotpos<atpos+2 || dotpos+2>= mail.length) {
        alert("Not a valid e-mail address");
        return false;
    }
  }
  </script>
  </body>

  


  </html>

