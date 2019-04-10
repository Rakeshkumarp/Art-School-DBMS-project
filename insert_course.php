<!Doctype html>
	<html>
		<head>
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<link rel="stylesheet" type="text/css" href="./w3.css">
			<title>Insert Course</title>
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
					 	 <h3>Insert Course</h3>
						<form class="w3-container" action=insert_course.php method="POST">
							<p>
								<label>COURSE ID</label> 
								<input type="text" name="CID" class="w3-input">  
							</p>
							<p>
								<label>COURSE NAME</label>
								<input type="text" name="CNAME" class="w3-input"> 
							</p>
							<p>
								<label>DEPARTMENT NUMBER</label>
								<input type="text" name="DNO" class="w3-input"> 
							</p>
							<p>
								<input type="submit" name="submit2" class="w3-button w3-green">
							</p>

						</form>
	</body>
	</html>

	<?php

										include "myfile.php";

										$conn=OpenCon();
										if(isset($_POST['submit2']))         
										{

											$CID = $_POST['CID'];
											$CNAME = $_POST['CNAME'];
											$DNO = $_POST['DNO'];
											
											

											$sql="INSERT INTO course VALUES('$CID','$CNAME',0,0,'$DNO')";

											if ($conn->query($sql) === TRUE) {
											   include "successinsert.php";
											} else {
											    include "failureinsert.php";
											}
										}
										?>
