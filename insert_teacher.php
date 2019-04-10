<!Doctype html>
	<html>
		<head>
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<link rel="stylesheet" type="text/css" href="./w3.css">
			<title>Insert Teacher</title>
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
					 	 <h3>Insert Teacher</h3>
						<form class="w3-container" action=insert_teacher.php method="POST">
							<p>
							<label>TEACHER ID</label> 
							<input type="text" name="TID" class="w3-input">
							</p>
							<p>
								<lable>TEACHER NAME</lable>
								<input type="text" name="TNAME" class="w3-input"> 
							</p>
								<label>YEAR OF JOINING</label>
								<input type="text" name="YOJ" class="w3-input">  
							<p>
								<label>DEPARTMENT NUMBER</label>
								<input type="text" name="DNO" class="w3-input"> 
							</p>
							<p>
								<input type="submit" name="submit3" class="w3-button w3-green" >
							</p>
						</form>
		</body>
	</html>



	<?php

										include "myfile.php";

										$conn=OpenCon();

										if(isset($_POST['submit3']))         
										{

											$TID = $_POST['TID'];
											$TNAME = $_POST['TNAME'];
											$YOJ = $_POST['YOJ'];
											$DNO = $_POST['DNO'];
											
											

											$sql="INSERT INTO teacher VALUES('$TID','$TNAME','$YOJ','$DNO')";

											if ($conn->query($sql) === TRUE) {
											    include "successinsert.php";
											} else {
											   include "failureinsert.php";
											}
										}