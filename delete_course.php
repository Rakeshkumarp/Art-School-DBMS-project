<!Doctype html>
	
	<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="./w3.css">
		<title>Delete Course</title>
	</head>
	<body>
		<div class="w3-bar w3-black">
			<a href="./course.php" class="w3-bar-item w3-button w3-mobile">Course</a>
			<a href="./delete_course.php" class="w3-bar-item w3-button w3-mobile w3-right">Delete Course</a>
			<a href="./insert_course.php" class="w3-bar-item w3-button w3-mobile w3-right">Insert Course</a>
		</div>
		<div class="w3-container" align="center" style="margin-top: 50px;">
				<div class="w3-card-4 w3-dark-grey" style="width:50%">
					 <div class="w3-container w3-center">
					 	 <h3>Delete Course</h3>
						<form class="w3-container" action=delete_course.php method="POST">
							<p>
								<label>COURSE ID</label>
								<input class="w3-input" type="text" name='CID'>
							</p>
							<p>
								<input type="submit" name="submit7" class="w3-button w3-green">
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

										if(isset($_POST['submit7']))         
										{
											
											$CID = $_POST['CID'];
											

											$sql="DELETE FROM course WHERE CID='$CID'";

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