<!DOCTYPE html>
	<html>
		<head>
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<link rel="stylesheet" type="text/css" href="./w3.css">
			<title>Student credits</title>
			
		</head>
		<body> 
		<div class="w3-top">
		<div class="w3-bar w3-black">
			<a href="./student.php" class="w3-bar-item w3-button w3-mobile">Student</a>
			<a href="./delete_student.php" class="w3-bar-item w3-button w3-mobile w3-right">Delete Student</a>
			<a href="./view_credits.php" class="w3-bar-item w3-button w3-mobile w3-right">View Credits
				  	</a >
			<a href="./insert_credits.php" class="w3-bar-item w3-button w3-mobile w3-right">Insert Credits</a>
			<a href="./insert_student.php" class="w3-bar-item w3-button w3-mobile w3-right">Insert Details</a>
		</div>
		</div>
			    	
			
			<div>
				<?php
					include "myfile.php";
                
               			$conn=OpenCon();

				

				

				?>
				<table class="w3-table-all w3-hoverable w3-card-4 w3-centered " style="width:50%;margin: 0 auto;margin-top: 40px;">
				<tr class="w3-green">
				<th>STUDENT ID</th>
				<th>SUBJECT ID </th>
				<th>CREDITS SCORED</th>
				
				</tr>
				<?php
				
				$sql="CALL view_credits() ";
				$result = mysqli_query($conn,$sql);    
			
				while($row = mysqli_fetch_array($result))
				{
				echo "<tr>";
				echo "<td>" . $row['stdid'] . "</td>";
				
				echo "<td>" . $row['subid'] . "</td>";
				echo "<td>" . $row['credits_scored'] . "</td>";
				
			
			
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
