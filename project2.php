<!DOCTYPE html>
<html>
  <head>
    <title> BOOK FARMS </title>
    
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="project.css">
  </head>



  <body >
    <div><a href="#"><img src="Bookfarms_logo.jpg" alt="logo" height=100 width =500></a>
      <div class="loginform" >
        <form method="POST" action="login.php">
<pre>

</pre>
           <span style="float:right;"><br>
           <button type="submit" class="fbutton" onclick="location.href='register.php';">Register</button>&nbsp;&nbsp;&nbsp;&nbsp;
          </span>
          <span style="float:right;"><br>
           <input  type="submit" class="fbutton" name="l_login" value ="Login">&nbsp;&nbsp;&nbsp;&nbsp;
          </span>
          <span style="float:right;">
         Password:<br>
           <input type="password" name="password" required>&nbsp;&nbsp;&nbsp;&nbsp;<br><br>
          </span>
          <span style="float:right;position:relative">Login id:<br>
         <input type="text" name="username" required >&nbsp;&nbsp;&nbsp;&nbsp;<br></span></form></div>
      
      </form>

    </div>
    <ul id="home">
  <li><a class="m1" href="#">Home</a></li>
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
<br>
<div style="width:100%;background-color: #F7F7F7">

  <img src="bk1.jpg" alt="boo1" class="Slides " style="padding: 20px;width:90%;height:500px;margin-top:20px;margin-left:50px; height:350px" >
  <img src="bk2.jpg" alt="boo2" class="Slides " style="padding: 20px;width:90%;height:500px;margin-top:20px;margin-left:50px; height:350px" >
  <img src="bk3.jpg" alt="boo3" class="Slides" style="padding: 20px;width:90%;height:500px;margin-top:20px;margin-left:50px; height:350px" >
  <img src="bk4.jpg" alt="boo4" class="Slides " style="padding: 20px;width:90%;height:500px;margin-top:20px;margin-left:50px; height:350px" >
  <img src="bk5.jpg" alt="boo5" class="Slides " style="padding: 20px;width:90%;height:500px;margin-top:20px;margin-left:50px;height:350px" >
  <img src="bk6.jpg" alt="boo6" class="Slides " style="padding: 20px;width:90%;height:500px;margin-top:20px;margin-left:50px;height:350px" >

</div>

<script>
  var ind=0;
  shows();
  function shows()
  {
    
    var i;
    var x=document.getElementsByClassName("Slides");
    for(i=0;i<x.length;i++)
    {
      x[i].style.display="none";
    }
    ind++;
    if(ind>x.length){ind=1;}
    x[ind-1].style.display="block";
    setTimeout(shows,3000);
  }
</script>
<br>
<br>

<div class="slideswrapper">
  <div class="slide">
    <a href ="#"><img src="book_1.jpg" style="width:100%  " height=300px></a>
  </div>
  <div class="slide">
    <a href ="#"><img src="book_2.jpg" style="width:100%  "height=300px></a>
    </div>
  <div class="slide">
    <img src="book_3.jpg" style="width:100% " height=300px>
  </div>
  
  <a class="prev" onclick="nextslide(-1)">&#10094;</a>
    <a class="next" onclick="nextslide(1)">&#10095;</a>
<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>


<script>
var Index = 1;

showSlides(Index);

function nextslide(n) {
  showSlides(Index += n);
}

function currentSlide(n) {
  showSlides(Index = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("slide");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {Index = 1} 
  if (n < 1) {Index = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none"; 
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace("active", "");
  }
  slides[Index-1].style.display = "block"; 
  dots[Index-1].className += " active";
}
</script>
<br>
<div class="imagewrapper">
  <span class="best"> Best Sellers </span>
<div class="dd">
  <span class="himg">
    <a href="#">
    <img src="img1.jpg" height=300 width =200 class="b_img">
    </a>
  </span>
  <span>
    <a href="#">
    <img src="img2.jpg" height=300 width =200 class="b_img">
  </a>
  </span>
  

  <span>
     <a href="#">
    <img src="img4.jpg" height=300 width =200 class="b_img"></a>
  </span>
  <span>
    <a href="#">
    <img src="img5.jpg" height=300 width =200 class="b_img"></a>
  </span>
  <span>
    <a href="#">
    <img src="img6.jpg" height=300 width =200 class="b_img"></a>
  </span>
  <span>
    <a href="#">
    <img src="img7.jpg" height=300 width =200 class="b_img"></a>
  </span>
  </span>
  <span>
    <a href="#">
    <img src="img8.png" height=300 width =200 class="b_img"></a>
  </span>
  <span>
    <a href="#">
    <img src="img9.jpg" height=300 width =200 class="b_img"></a>
  </span>
  
  <span>
    <a href="#">
    <img src="img10.jpg" height=300 width =200 class="b_img"></a>
  </span>
</div>
</div>
<br>


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
 
  </body>
</html>