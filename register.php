<?php
session_start();
//connecting db

$db = mysqli_connect("localhost","root","","art_school");

if(isset($_POST['register_btn']))	{
	
 	$username=mysqli_real_escape_string($db,$_POST['username']);
	$email=mysqli_real_escape_string($db,$_POST['email']);
	$password=mysqli_real_escape_string($db,$_POST['password']);
	$password2=mysqli_real_escape_string($db,$_POST['password2']);

	

	    if ($password == $password2)	{
		 	$password=md5($password);//hashing password for security
			$sql="INSERT INTO users(username,email,password) VALUES('$username','$email','$password')";
			mysqli_query($db, $sql);
			
			$_SESSION['message'] = "You are successfully logged in";
			$_SESSION['username'] = $username;
			header("location:home.php"); //redirecting to home page
			
		} 
		else{
		// if password is not matching 

			include "error.php";
			}
	
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>REGISTRATION OF THE ADMIN</title>
		<link rel="stylesheet" type='text/css' href='./w3.css'>
	</head>
		<body style="background-image: url('./images/i1.jpg');background-repeat: no-repeat;background-size: cover;">
		
	<div class="w3-container " align="center" style="margin-top: 100px;margin-left: 900px">
				<div class="w3-card-2" style="width:100%">
					 <div class="w3-container w3-center">
					 	<h1 style="color: white">REGISTER</h1>
						<form method="post" action="register.php">
							<p>
								<label style="color: white">USERNAME</label>
									
								<input type="text" name="username" class="w3-input" required>
							</p>
							<p>
									<label style="color: white">EMAIL</label>
									
									<input type="email" name="email" class="w3-input" required>
							</p>
							<p>
								<label style="color: white">PASSWORD</label>
									
									<input type="password" name="password" class="w3-input" id="mypass" required>
							</p>
							<p>
								<label style="color: white">CONFIRM PASSWORD</label>
									
									<input type="password" name="password2" class="w3-input" id="mypass2" required>

							</p>
							<p style="color: white">
								<input type="checkbox" onclick="myFunction()">Show Password

								<script>
									function myFunction() {
									    var x = document.getElementById("mypass")
									    if (x.type === "password") {
									        x.type = "text";
									    } else {
									        x.type = "password";
									    }
									      var y = document.getElementById("mypass2")
									    if (y.type === "password") {
									        y.type = "text";
									    } else {
									        y.type = "password";
									    }
									}
								</script>
							</p>
							
								<a href="./index.php" class="w3-button w3-red" >CANCEL</a>
								 <input type="submit" name="register_btn" value="SIGNUP" class="w3-button w3-green">
							
									
								
						</form>
					</div>
				</div>
			</div>

	
</body>

</html>
