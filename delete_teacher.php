<!Doctype html>
	
	<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="./w3.css">
		<title>Delete Teacher</title>
	</head>
	<body>
		<div class="w3-bar w3-black">
			<a href="./teacher.php" class="w3-bar-item w3-button w3-mobile">Teacher</a>
			<a href="./delete_teacher.php" class="w3-bar-item w3-button w3-mobile w3-right">Delete Teacher</a>
			<a href="./insert_teacher.php" class="w3-bar-item w3-button w3-mobile w3-right">Insert Teacher</a>
		</div>
		<div class="w3-container" align="center" style="margin-top: 50px;">
				<div class="w3-card-4 w3-dark-grey" style="width:50%">
					 <div class="w3-container w3-center">
					 	 <h3>Delete Teacher</h3>
						<form class="w3-container" action=delete_teacher.php method="POST">
							<p>
								<label>TEACHER ID</label>
								<input class="w3-input" type="text" name='TID'>
							</p>
							<p>
								<input type="submit" name="submit8" class="w3-button w3-green">
							</p>
						</form>
					</div>
				</div>
			</div>


	
	</body>
	</html>

	<?php

										include "myfile.php";

										$conn=OpenCon();

										if(isset($_POST['submit8']))         
										{
											
											$TID = $_POST['TID'];
											

											$sql="DELETE FROM teacher WHERE TID='$TID'";

											if ($conn->query($sql) === TRUE) 
											{
											     include "successdelete.php";
											}
											 else
											  {
											     include "failuredelete.php";
												}
										}

										CloseCon($conn);

	?>