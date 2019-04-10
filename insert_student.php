<!Doctype html>
	<html>
		<head>
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<link rel="stylesheet" type="text/css" href="./w3.css">
			<title>Insert Student</title>
		</head>
		<body>
			<div class="w3-bar w3-black">
			<a href="./student.php" class="w3-bar-item w3-button w3-mobile">Student</a>
			<a href="./delete_student.php" class="w3-bar-item w3-button w3-mobile w3-right">Delete Student</a>
			<a href="./view_credits.php" class="w3-bar-item w3-button w3-mobile w3-right">View Credits
				  	</a >
			<a href="./insert_credits.php" class="w3-bar-item w3-button w3-mobile w3-right">Insert Credits</a>
			<a href="./insert_student.php" class="w3-bar-item w3-button w3-mobile w3-right">Insert Student</a>
		</div>
			<div class="w3-container" align="center" style="margin-top: 50px;">
				<div class="w3-card-4 w3-dark-grey" style="width:50%">
					 <div class="w3-container w3-center">
					 	 <h3>Insert Student</h3>
						<form class="w3-container" action=insert_student.php method="POST">	
							<p>
								<label>STUDENT ID</label> 
								<input type="text" name="STUDID" class="w3-input w3-required"> 
							</p>
							<p>
								<label>STUDENT NAME</label>
								<input type="text" name="STUDNAME" class="w3-input"> 
							</p>
							<p>
								<label>DATE OF BIRTH(YYYY/MM/DD)</label>
								<input type="text" name="DOB" class="w3-input">
							</p>
								<label>YEAR OF ENROLLMENT</label>
								<input type="text" name="YEAR_OF_ENROLLMENT" class="w3-input"> 
							<p>
								<label>COURSE ID</label>
								<input type="text" name="CID" class="w3-input">  
							</p>
							<p>
								<input type="submit" name="submit5" class="w3-button w3-green">
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

										if(isset($_POST['submit5']))         
										{

											$STUDID = $_POST['STUDID'];
											$STUDNAME = $_POST['STUDNAME'];
											$DOB = $_POST['DOB'];
											$YEAR_OF_ENROLLMENT = $_POST['YEAR_OF_ENROLLMENT'];
											$CID = $_POST['CID'];
											
											
											

											$sql="INSERT INTO student VALUES('$STUDID','$STUDNAME','$DOB','$YEAR_OF_ENROLLMENT','$CID')";

											if ($conn->query($sql) === TRUE) {
											  include "successinsert.php";

											} else {
											    include "failureinsert.php";
											}
										}

									



										CloseCon($conn);
?> 