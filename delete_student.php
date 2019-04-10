<!Doctype html>
	
	<html>
	<head>
		<link rel="stylesheet" type="text/css" href="./w3.css">
		<title>Delete Student</title>
	</head>
	<body>
		<div class="w3-bar w3-black">
			<a href="./student.php" class="w3-bar-item w3-button w3-mobile">Student</a>
			<a href="./delete_student.php" class="w3-bar-item w3-button w3-mobile w3-right">Delete Student</a>
			<a href="./view_credits.php" class="w3-bar-item w3-button w3-mobile w3-right">View Credits
				  	</a >
			<a href="./insert_credits.php" class="w3-bar-item w3-button w3-mobile w3-right">Insert Credits</a>
			<a href="./insert_student.php" class="w3-bar-item w3-button w3-mobile w3-right">Insert Details</a>
		</div>
		<div class="w3-container" align="center" style="margin-top: 50px;">
				<div class="w3-card-4 w3-dark-grey" style="width:50%">
					 <div class="w3-container w3-center">
					 	 <h3>Delete Student</h3>
						<form class="w3-container" action=delete_student.php method="POST">
							<p>
								<label>STUDENT ID</label>
								<input class="w3-input" type="text" name='STUDID'>
							</p>
							<p>
								<input type="submit" name="submit10" class="w3-button w3-green">
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

										if(isset($_POST['submit10']))         
										{
											
											$STUDID = $_POST['STUDID'];
											

											$sql="DELETE FROM student WHERE STUDID='$STUDID'";

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