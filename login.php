<?php
session_start();
//connecting db

$db = mysqli_connect("localhost","root","","art_school");

if(isset($_POST['login_btn']))	{
	
 	$username=mysqli_real_escape_string($db,$_POST['username']);
	$password=mysqli_real_escape_string($db,$_POST['password']);
	
	$password=md5($password);//hashing password for security
			$qry="SELECT * FROM users WHERE username='$username'AND password='$password'";
			$run= mysqli_query($db, $qry);

			if (!$db || mysqli_num_rows($run)==1) {
			
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
		<title>LOGIN OF THE ADMIN</title>
		<link rel="stylesheet" type='text/css' href='./w3.css'>
	</head>
	<body style="background-image: url('./images/i1.jpg');background-repeat: no-repeat;background-size: cover;">
		
	<div class="w3-container " align="center" style="margin-top: 150px;margin-left: 900px">
				<div class="w3-card-2" style="width:100%">
					 <div class="w3-container w3-center">
					 	 <h1 style="color: white"> LOGIN</h1>
						<form class="w3-container " action=login.php method="POST">
							<p>
								<label style="color: white">USERNAME</label>
								<input class="w3-input" type="text" name='username' required>
							</p>
							<p>
								<label style="color: white">PASSWORD</label>
								<input class="w3-input" type="password" name='password' id="mypass" required>
							</p>
							<p style="color: white">
								<input type="checkbox" onclick="myFunction()">Show Password

								<script>
									function myFunction() {
									    var x = document.getElementById("mypass");
									    if (x.type === "password") {
									        x.type = "text";
									    } else {
									        x.type = "password";
									    }
									}
								</script>
							</p>
							<a href="./index.php" class="w3-button w3-red" >CANCEL</a>
							<input type="submit" name="login_btn" class="w3-button w3-green" value="LOGIN">
						</form>
					</div>
				</div>
			</div>
</body>

</html>
