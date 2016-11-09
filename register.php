<!DOCTYPE html>
<html>
  <head>
    <title> REGISTRATION</title>
    
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="project.css">
    <style>
    .foutline{
  background-color: #f1f1f1;
  margin-top: 10px;
  margin-left:450px; 
  margin-right:450px;
   box-shadow: 0 5px 5px 8px rgba(0,0,0,0.24), 0 3px 3px 3px rgba(0,0,0,0.19);

}
.in1{
    height:34px;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 2px;
    outline: none;
    
}
    </style>
  </head>
  



  <body>
    <div><a href="project2.php"><img src="Bookfarms_logo.jpg" alt="logo" height=100 width =500></a></div>
   <ul id="home">
  <li><a class="m1" href="project2.php">Home</a></li>
  <li><a class="m1" href="#">Featured</a></li>
  <li><a class="m1" href="#">About Us</a></li>
  <li class="dropdown m1">
<a href="#" class="drop-button">Search by</a>
    <div class="dropmenu">
      <a href="#">Genre</a>
      <a href="#">Popularity</a>
      <a href="#">Name</a>
        <li><a class="m1" href="#">Book Stores</a></li>

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
<br>
<div class="rhead"><em>REGISTRATION </em> </div>
  <div class="foutline">
    <div class="internal_space">


    <form name ="register" method="post" action="form_store.php" onsubmit="return validateform()">


    <br><strong class="rheadin">Name<span class="required"></span></strong></div>
    <div class="int_div">
      <input type="text" name="first_name" class="in1" size=28px placeholder="First"  required>
      <input type="text" name="last_name" class="in1" style="margin-left:41px; margin-right:50px;" size=28px placeholder="Last"  required>

    </div>
    <div class="internal_space">
    <br><strong class="rheadin">Choose your username<span class="required"></span></strong></div>
    <input type="text" name="username" class="in1" style="margin-left:50px;margin-top: 5px;" size= 68px required placeholder="username">

    <div class="internal_space">
    <br><strong class="rheadin">Create a password<span class="required"></span></strong></div>
    <input type="password" name="password" class="in1" style="margin-left:50px;margin-top: 5px;" size= 68px required placeholder="Minimum 8 Characters">

    <div class="internal_space">
    <br><strong class="rheadin">Confirm your password<span class="required"></span></strong></div>
    <input type="password" name="cpassword" class="in1" style="margin-left:50px;margin-top: 5px;" size= 68px required placeholder="Minimum 8 Characters">

    <div class="internal_space">
    <br><strong class="rheadin">Email Address<span class="required"></span></strong></div>
    <input type="text" name="email" class="in1" style="margin-left:50px;margin-top: 5px;" size= 68px  required ></input>

    <div class="internal_space">
    <br><strong class="rheadin">Birthday<span class="required"></span></strong></div>
    
    <input type="text" name="date" class="in1" size=5pxx placeholder="Date" style="margin-left:50px;margin-top: 5px;">
    <select name="month" style="margin-left:40px;margin-top: 5px;" class="select_tag">
    <option value="January" selected>January</option>
    <option value="Febuary">Febuary</option>
    <option value="March">March</option>
    <option value="April">April</option>
    <option value="May">May</option>
    <option value="June">June</option>
    <option value="July">July</option>
    <option value="August">August</option>
    <option value="September">September</option>
    <option value="October">October</option>
    <option value="November">November</option>
    <option value="December">December</option>
    </select>
    <input type="text" name="year" class="in1" size=10px placeholder="Year" style="margin-left:40px;margin-top: 5px;">
    <div class="internal_space">
    <br><strong class="rheadin">Gender<span class="required"></span></strong></div>
    <input type="radio" name="male" class="male" style="margin-left:50px;margin-top: 5px;"  required> Male</input>
    <input type="radio" name="male" class="female" style="margin-left:50px;margin-top: 5px;"  required> Female</input>
    <input type="radio" name="male" class="other" style="margin-left:50px;margin-top: 5px;"  required> Other</input>

    <div class="internal_space">
    <br><strong class="rheadin">Mobile Number</strong></div>
    <input type="text" name="m_no" class="in1" style="margin-left:50px;margin-top: 5px;" size= 68px value="+91"></input>
    <br>
    <br>
    <br>
    <button name="form_submit" style="margin-right:50px;float:right;" class="fbutton1">Submit</button>
    
    <br>
    <br>
    
    <br>
    <br>
    

    </form>
  </div>
</div>

<br>
<br>
<br>
<div style="background-color:darkgreen; margin-top:10px;">

<br>
<br>
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
  <script>
  function validateform(){
    var pswd = document.register.password.value;
    var cpswd = document.register.cpassword.value;
    var mail = document.register.email.value;
    var atpos = mail.indexOf("@");
    var dotpos = mail.lastIndexOf(".");
    var date1 = document.register.date.value;
    if(pswd.length<8){
      alert("the password must be atleast 8 characters long")
      return false;
    }
    if( pswd != cpswd){
      alert("the two passwrds entered do not match");
      return false;
    }
    if (atpos<1 || dotpos<atpos+2 || dotpos+2>= mail.length) {
        alert("Not a valid e-mail address");
        return false;
    }
    if(date1>31 || date1<1){
      alert("enter a valid date");
      return false;
    }

  }
  </script>
		
	</div>
</div>