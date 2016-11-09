<!DOCTYPE html>
<html>
  <head>
    <TITLE> BOOKSTORES</TITLE>
 
    <script src="https://use.fontawesome.com/2e8038ffaa.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="project.css">



    <style>
      #map {
      	left: 230px;
      	top: 150px;
        height: 500px;
        width: 800px;
        border: 5px solid black;
        box-shadow: 0 20px 20px 0 rgba(0,0,0,0.24), 0 20px 20px 0 rgba(0,0,0,0.19);
      }
      #map:hover{
        border: 5px solid red;
      }
    </style>
    <script>

var nlat, nlong;

nlat= 12.9341;  //defau 12.9341° N, 77.5343° E

nlong = 77.5343;  // default

getLocation();
      function getLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition);
    } else { 
        alert("Geolocation is not supported by this browser.");
    }
}

function showPosition(position) {
    nlat = position.coords.latitude;
    nlong = position.coords.longitude;
}

      var map;
      var infowindow;
      var plcsearch = "";

      function initMap() {

        map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: nlat, lng: nlong},
          zoom: 12
        });

        infowindow = new google.maps.InfoWindow();
        var service = new google.maps.places.PlacesService(map);
        service.nearbySearch({
          location: {lat: nlat, lng: nlong},
          radius: 5000000,
          type: ['book_store']
        }, callback);
      }

      function callback(results, status) {
        if (status === google.maps.places.PlacesServiceStatus.OK) {
          for (var i = 0; i < results.length; i++) {
            createMarker(results[i]);
            plcsearch = plcsearch + "<br>" + results[i].name;
          }
        }
        var x = document.getElementById("plcrad");
  x.innerHTML = plcsearch;
      }

      function createMarker(place) {
        var placeLoc = place.geometry.location;
        var marker = new google.maps.Marker({
          map: map,
          position: place.geometry.location
        });

        google.maps.event.addListener(marker, 'click', function() {
          infowindow.setContent(place.name);
          infowindow.open(map, this);
        });
      }

    </script>
  </head>
  
  <body >
    <div><a href="project.php"><img src="Bookfarms_logo.jpg" alt="logo" height=100 width =500></a>
      <div class="loginform" >
        
<pre>

</pre>
           
          
          
         </div>
      
      </form>

    </div>
    <ul id="home">
  <li><a class="m1" href="project.php">Home</a></li>
  <li><a class="m1" href="featured.php">Featured</a></li>
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










    <div id="map" ></div>
    <!-- <div id="plcrad">List of Countries</div> -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDHFav7Xl4smA5A1jcHw8Iu6JLtz9W7tyQ&libraries=places&callback=initMap" async defer></script>
    <br>
    <br>
<br>
    <br><br>
    <br><br>
    <br>


    <div style="background-color:darkgreen; margin-top:200px;">
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

  </body>
</html>