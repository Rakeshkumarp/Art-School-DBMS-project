<!Doctype html>
	
	<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="./w3.css">
		<title>Delete Subject</title>
	</head>
	<body>
		<div class="w3-bar w3-black">
			<a href="./subject.php" class="w3-bar-item w3-button w3-mobile">Subject</a>
			<a href="./delete_subject.php" class="w3-bar-item w3-button w3-mobile w3-right">Delete Subject</a>
			<a href="./insert_subject.php" class="w3-bar-item w3-button w3-mobile w3-right">Insert Subject</a>
		</div>
		<div class="w3-container" align="center" style="margin-top: 50px;">
				<div class="w3-card-4 w3-dark-grey" style="width:50%">
					 <div class="w3-container w3-center">
					 	 <h3>Delete Subject</h3>
						<form class="w3-container" action=delete_subject.php method="POST">
							<p>
								<label>SUBJECT ID</label>
								<input class="w3-input" type="text" name='SUBID'>
							</p>
							<p>
								<input type="submit" name="submit9" class="w3-button w3-green">
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

										if(isset($_POST['submit9']))         
										{
											
											$SUBID = $_POST['SUBID'];
											

											$sql="DELETE FROM subject WHERE SUBID='$SUBID'";

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