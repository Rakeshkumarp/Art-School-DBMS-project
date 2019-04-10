<?php
	session_start();
?>


<!DOCTYPE html>
	
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>HOME</title>
		<link rel="stylesheet" type="text/css" href="./mystyle.css">
  		<link rel="stylesheet" type="text/css" href="./w3.css">
	</head>
	<body>
		<div class="w3-top">
	        <div class="w3-bar w3-black w3-xlarge">
	            <a href="./index.php" class="w3-bar-item w3-button w3-mobile w3-right">Logout</a>
	        </div>
    	</div>
		<div style="margin-top:70px;">
			<p class="w3-text-black w3-center w3-xxlarge">HI <span class="w3-text-green"> <?php echo $_SESSION['username'] ; ?> </span>WELCOME TO THE HOMEPAGE</p>
		</div>
		<div class="w3-row-padding">
			<div class="w3-col" style="width:20%;">
				<div class="container w3-">
					<a href="./department.php">
						<img src="./images/dep.png" alt="dep" class="image">  
						<div class="overlay">
							<div class="w3-display-middle w3-text-white w3-xlarge">DEPARTMENTS</div>
						</div>
					</a>
				</div>
			</div>
			<div class="w3-col" style="width:20%;">
				<div class="container">
					<a href="./course.php">
						<img src="./images/course.png" alt="course" class="image">  
						<div class="overlay">
							<div class="w3-display-middle w3-text-white w3-xlarge">COURSES</div>
						</div>
					</a>
				</div>
			</div>
			<div class="w3-col" style="width:20%;">
				<div class="container">
					<a href="./teacher.php">
						<img src="./images/teacher.png" alt="teacher" class="image">  
						<div class="overlay">
							<div class="w3-display-middle w3-text-white w3-xlarge">TEACHERS</div>
						</div>
					</a>
				</div>
			</div>
			<div class="w3-col" style="width:20%;">
				<div class="container">
					<a href="./subject.php">
						<img src="./images/subject.png" alt="subject" class="image">  
						<div class="overlay">
							<div class="w3-display-middle w3-text-white w3-xlarge">SUBJECTS</div>
						</div>
					</a>
				</div>
			</div>
			<div class="w3-col" style="width:20%;">
				<div class="container">
					<a href="./student.php">
						<img src="./images/student.png" alt="student" class="image w3-image">  
						<div class="overlay">
							<div class="w3-display-middle w3-text-white w3-xlarge">STUDENTS</div>
						</div>
					</a>
				</div>
			</div>
		</div>
			
		<div class="w3-bottom" style="margin-bottom: 30px;">
		<div class="w3-content" style="max-width:100%;">
			<div class="mySlides w3-container w3-light-grey  w3-white w3-card-4">
				<span class="w3-text-green" style="font-size:150px;line-height:0.7em;opacity:0.8">&#10077;</span>
			 	<p class="w3-xlarge w3-sherif" style="margin-top:-40px;">
					<i>Every child is an artist. The problem is how to remain an artist once we grow up.</i>
				</p>
			  	<p>Pablo Picasso</p>
			</div> 
			<div class="mySlides w3-container w3-light-grey  w3-white w3-card-4">
			 		<span class="w3-text-green" style="font-size:150px;line-height:0.7em;opacity:0.8">&#10077;</span>
			 	<p class="w3-xlarge w3-sherif" style="margin-top:-40px;">
					<i>Creativity takes courage.</i>
				</p>
			  	<p>Henri Matisse</p>
			</div> 
			<div class="mySlides w3-container w3-light-grey  w3-white w3-card-4">
			 		<span class="w3-text-green" style="font-size:150px;line-height:0.7em;opacity:0.8">&#10077;</span>
			 	<p class="w3-xlarge w3-sherif" style="margin-top:-40px;">
					<i>Every artist was first an amateur.</i>
				</p>
			  	<p>Ralph Waldo Emerson</p>
			</div> 
			<div class="mySlides w3-container w3-light-grey  w3-white w3-card-4">
			 		<span class="w3-text-green" style="font-size:150px;line-height:0.7em;opacity:0.8">&#10077;</span>
			 	<p class="w3-xlarge w3-sherif" style="margin-top:-40px;">
					<i>Art enables us to find ourselves and lose ourselves at the same time.</i>
				</p>
			  	<p>Thomas Merton</p>
			</div> 
			<div class="mySlides w3-container w3-light-grey  w3-white w3-card-4">
			 		<span class="w3-text-green" style="font-size:150px;line-height:0.7em;opacity:0.8">&#10077;</span>
			 	<p class="w3-xlarge w3-sherif" style="margin-top:-40px;">
					<i>The principles of true art is not to portray, but to evoke.</i>
				</p>
			  	<p>Jerzy Kosinski</p>
			</div> 
		</div>
	</div>

		<script>
		var slideIndex = 0;
		carousel();

		function carousel() {
		    var i;
		    var x = document.getElementsByClassName("mySlides");
		    for (i = 0; i < x.length; i++) {
		      x[i].style.display = "none"; 
		    }
		    slideIndex++;
		    if (slideIndex > x.length) {slideIndex = 1} 
		    x[slideIndex-1].style.display = "block"; 
		    setTimeout(carousel, 2000); 
		}
		</script>

		
	</body>
</html>