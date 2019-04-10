

<!Doctype html>
	<html>
		<head>
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<link rel="stylesheet" type="text/css" href="./w3.css">
			<title>Insert Department</title>
		</head>
		<body>
			<div class="w3-bar w3-black">
			  <a href="./department.php" class="w3-bar-item w3-button w3-mobile">Department</a>
			  <a href="./delete_department.php" class="w3-bar-item w3-button w3-mobile w3-right">Delete Department</a>
			  <a href="./insert_department.php" class="w3-bar-item w3-button w3-mobile w3-right">Insert Department</a>
			</div>
			<div class="w3-container" align="center" style="margin-top: 50px;">
				<div class="w3-card-4 w3-dark-grey" style="width:50%">
					 <div class="w3-container w3-center">
					 	 <h3>Insert Department</h3>
						<form class="w3-container" action=insert_department.php method="POST">
							<p>
								<label>DEPARTMENT NUMBER</label>
								<input class="w3-input" type="text" name='DNO'>
							</p>
							<p>
								<label>DEPARTMENT NAME</label>
								<input class="w3-input" type="text" name='DNAME'>
							</p>
							<p>
								<input type="submit" name="submit1" class="w3-button w3-green">
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

										if(isset($_POST['submit1']))         
										{
											$DNO = $_POST['DNO'];
											$DNAME = $_POST['DNAME'];
											

											$sql="INSERT INTO Department VALUES('$DNO','$DNAME')";

											if ($conn->query($sql) === TRUE)
											 {
												
												include "successinsert.php";
											}
											 else
											  {
											   include "failureinsert.php";
											}
										}

										CloseCon($conn);
										?>

	


  

  
     
    