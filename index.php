<!DOCTYPE html>
<html>
<title>INDEX </title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="./w3.css">

<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Arial", sans-serif}
body, html {
    height: 100%;
    line-height: 1.8;
}
/* Full height image header */
.bgimg-1 {
    background-position: center;
    background-size: cover;
    background-image: url("./images/violin.jpg");
    /*ADD THE PROPER SOURCE FOR THE first background IMAGE*/
    min-height: 100%;
}
.w3-bar .w3-button {
    padding: 16px;
}
</style>
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-card" id="myNavbar">
    <a href="#artschool" class="w3-bar-item w3-button w3-wide">ARTS SCHOOL</a>
    <!-- Right-sided navbar links -->
    <div class="w3-right w3-hide-small">
      <a href="#about" class="w3-bar-item w3-button">ABOUT</a>
      <a href="#team" class="w3-bar-item w3-button"><i class="fa fa-user"></i> TEAM</a>
   </div>
    
    <!-- Hide right-floated links on small screens and replace them with a menu icon -->
 <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
      <i class="fa fa-bars"></i>
    </a>
  </div>
</div>

<!-- Sidebar on small screens when clicking the menu icon -->
<nav class="w3-sidebar w3-bar-block w3-black w3-card w3-animate-left w3-hide-medium w3-hide-large" style="display:none" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-large w3-padding-16">Close ×</a>
  <a href="#about" onclick="w3_close()" class="w3-bar-item w3-button">ABOUT</a>
  <a href="#team" onclick="w3_close()" class="w3-bar-item w3-button">TEAM</a>
</nav>

<!-- Header with full-height image -->
<header class="bgimg-1 w3-display-container w3-grayscale-min" id="artschool">
  <div class="w3-display-left w3-text-white" style="padding:48px">
    <span class="w3-jumbo w3-hide-small"> ARTS SCHOOL</span><br>
    
    <span class="w3-large">Stop wasting your time in files,use our application</span>
    <p><a href="./register.php" class="w3-button w3-white w3-padding-large w3-large w3-margin-top w3-opacity w3-hover-opacity-off">ADMINISTRATOR <br> SIGNUP</a></p>
    
     <p><a href="./login.php" class="w3-button w3-white w3-padding-large w3-large w3-margin-top w3-opacity w3-hover-opacity-off">ADMINISTRATOR<br>LOGIN</a></p>



  </div> 
  <div class="w3-display-bottomleft w3-text-grey w3-large" style="padding:24px 48px">

</header>

<!-- About Section -->
<div class="w3-container" style="padding:128px 16px" id="about">
  <h3 class="w3-center">ABOUT THE APPLICATION</h3>
  <p class="w3-center w3-large">Key features of our application</p>

  <div class="w3-row-padding w3-center" style="margin-top:90px">

    <div class="w3-quarter">
      <img src="./images/desktop.png" alt="Reduced redundancy">
      <p class="w3-large">Reduced redundancy</p>

    </div>
    <div class="w3-quarter">
      <img src="./images/heart.png" alt="User friendly">
      <p class="w3-large">User friendly</p>

    </div>
    <div class="w3-quarter">
      <img src="./images/diamond.png" alt="Remote access">
      <p class="w3-large">Remote access</p>

    </div>
    <div class="w3-quarter">
      <img src="./images/cog.png" alt="Secure">
      <p class="w3-large">Secure </p>
 
    </div>
  </div>
</div>


<!-- Team Section -->
<div class="w3-container" style="padding:128px 16px" id="team">
  <h3 class="w3-center">THE TEAM</h3> 
  
  <div class="w3-row-padding w3-grayscale" style="margin-top:64px">
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-card">
        <img src="./images/rakesh1.jpg" alt="RAKESH" style="width:100%">
        <div class="w3-container">
          <h3>RAKESH KUMAR P</h3>
          <p>STUDENT OF PESIT</p>
         
        </div>
      </div>
    </div>
   					 <!-- ADD CORRECT PHOTOS -->
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-card">
        <img src="./images/pathak1.jpg" alt="PRANAV" style="width:100%">
        <div class="w3-container">
          <h3>PRANAV PATHAK</h3>
          <p>STUDENT OF PESIT</p>
          
        </div>
      </div>
    </div>
    
    
  </div>
</div>
    <!-- Image of location/map -->
    <img src="./images/PH1.jpg" class="w3-image w3-greyscale" style="width:100%;margin-top:48px">
  </div>
</div>

<!-- Footer -->
<footer class="w3-center w3-black w3-padding-64">
  <a href="#artschool" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>

 
</footer>
 
<script>
// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}


// Toggle between showing and hiding the sidebar when clicking the menu icon
var mySidebar = document.getElementById("mySidebar");

function w3_open() {
    if (mySidebar.style.display === 'block') {
        mySidebar.style.display = 'none';
    } else {
        mySidebar.style.display = 'block';
    }
}

// Close the sidebar with the close button
function w3_close() {
    mySidebar.style.display = "none";
}
</script>

</body>
</html>

