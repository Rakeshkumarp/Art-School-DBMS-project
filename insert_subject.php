<!Doctype html>
	<html>
		<head>
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<link rel="stylesheet" type="text/css" href="./w3.css">
			<title>Insert Subject</title>
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
					 	 <h3>Insert Subject</h3>
						<form class="w3-container" action=insert_subject.php method="POST">
							<p>
								<label>SUBJECT ID</label> 
								<input type="text" name="SUBID" class="w3-input">  
							</p>
								<label>SUBJECT NAME</label>
								<input type="text" name="SUBNAME" class="w3-input">
							<p>
								<label>COURSE ID</label>
								<input type="text" name="CID" class="w3-input">  
							</p>
								<label>TEACHER ID</label>
								<input type="text" name="TID" class="w3-input"> 
							<p>
								<label>CREDITS</label>
								<input type="text" name="CREDITS" class="w3-input">
							</p>
							<p>
								<input type="submit" name="submit4" class="w3-button w3-green">
							</p>

					</form>
	</body>
	</html>


	<?php

										include "myfile.php";

										$conn=OpenCon();

										if(isset($_POST['submit4']))         
										{

											$SUBID = $_POST['SUBID'];
											$SUBNAME = $_POST['SUBNAME'];
											$CID = $_POST['CID'];
											$TID = $_POST['TID'];
											$CREDITS = $_POST['CREDITS'];
											
											

											$sql="INSERT INTO subject VALUES('$SUBID','$SUBNAME','$CID','$TID',$CREDITS)";

											if ($conn->query($sql) === TRUE) {
											    include "successinsert.php";
											} else {
											  include "failureinsert.php";
											}
										}