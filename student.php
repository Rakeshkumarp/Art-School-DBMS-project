<!DOCTYPE html>
	<html>
		<head>
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<link rel="stylesheet" type="text/css" href="./w3.css">
			<title>Student</title>
			
		</head>
		<body> 
			<div class="w3-top">
				<div class="w3-bar w3-black">
					<div class="w3-dropdown-hover">
			      		<button class="w3-button"> <img src="./images/menu.png" alt="Menu" style="height: 20px;width: 20px;"></button>
			      		<div class="w3-dropdown-content w3-bar-block w3-card-4">
			      			<a href="./home.php" class="w3-bar-item w3-button">Home</a>
					        <a href="./department.php" class="w3-bar-item w3-button">Department</a>
					        <a href="./course.php" class="w3-bar-item w3-button">Course</a>
					        <a href="./teacher.php" class="w3-bar-item w3-button">Teacher</a>
					        <a href="./subject.php" class="w3-bar-item w3-button">Subject</a>
					        <a href="./student.php" class="w3-bar-item w3-button">Student</a>
			      		</div>
			    	</div>
				  	<a href="./delete_student.php" class="w3-bar-item w3-button w3-mobile w3-right">Delete Student</a>
				  	<a href="./view_credits.php" class="w3-bar-item w3-button w3-mobile w3-right">View Credits
				  	</a >
				  	<a href="./insert_credits.php" class="w3-bar-item w3-button w3-mobile w3-right">Insert Credits
				  	</a >

					<a href="./insert_student.php" class="w3-bar-item w3-button w3-mobile w3-right">Insert Student
					</a>
				</div>
			</div>
			<div>
				<?php
					include "myfile.php";
                
               			$conn=OpenCon();

				

				

				?>
				<table class="w3-table-all w3-hoverable w3-card-4 w3-centered" style="width:50%;margin: 0 auto;margin-top: 40px;">
				<tr class="w3-green">
				<th>STUDENT ID</th>
				<th>STUDENT NAME</th>
				<th>DATE OF BIRTH</th>
				<th>YEAR OF ENROLLMENT</th>
				<th>COURSE ID</th>
			
				</tr>
				<?php
				
				$sql="SELECT * FROM student ";
				$result = mysqli_query($conn,$sql);    
			
				while($row = mysqli_fetch_array($result))
				{
				echo "<tr>";
				echo "<td>" . $row['studid'] . "</td>";
				
				echo "<td>" . $row['studname'] . "</td>";
				echo "<td>" . $row['dob'] . "</td>";
				echo "<td>" . $row['year_of_enrollment'] . "</td>";
				echo "<td>" . $row['cid'] . "</td>";
				

			
			
				echo "</tr>";
				}
				?>
				</table>
				<?php
					CloseCon($conn);
				?>
			</div>
		</body>
	</html>
