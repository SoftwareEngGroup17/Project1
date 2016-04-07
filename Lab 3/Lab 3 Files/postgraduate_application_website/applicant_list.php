<!DOCTYPE html>
<?php
//Step1
 $db = mysqli_connect("localhost","root","password"); 
 if (!$db) {
 die("Database connection failed miserably: " . mysqli_error());
 }
//Step2
 $db_select = mysqli_select_db($db,'students');
 if (!$db_select) {
 die("Database selection also failed miserably: " . mysqli_error());
 }
?>
<html>
	<head>
		<title>School of Electrical & Information Engineering</title>
		<link rel="stylesheet" type="text/css" href="applicant_list_style.css" />
		<meta name="viewport" content="width-device-width, initial-scale=1.0">
	</head>

	<body>
	<div id="container">
		<div class="header">
			<h1>School of Electrical & Information Engineering</h1>
			<nav><ul>
				<li><a href="/home_page.html">Home</a></li>
				<li class="active"><a href="/applicant_list.php">Applicant List</a></li>
			</ul></nav>
		</div>
	
		<div class="content">	
			<div class="text">
				<h2>Current Applicant List:</h2>		
			</div>
			
			<div class="list">				
   				<table cellspacing="0" cellpadding="1" border="1" width="800" >
     					<tr style="color:white;background-color:grey">
        					<th>Applicant Name</th>
       						<th>Supervisor</th>
						<th>Program</th>
						<th></th>
     					</tr>

							
         				<?php
						$result = mysqli_query($db, "SELECT * FROM student_information", MYSQLI_USE_RESULT);
 						if (!$result) 
						{
 							die("Database query failed: " . mysqli_error());
						}

 						while ($row = mysqli_fetch_array($result)) 
						{
 							echo "<tr><td>$row[1].</td> <td>$row[4].</td> <td>$row[6].</td>";
							echo "<td><a href=/applicant_info.php?id=$row[0]>More Info</a></td>";
 							echo "</tr>";
 						}
					?>
				</table>
			</div>
		</div>
	</div>	
	</body>

</html>
<?php
//Step5
 mysqli_close($db);
?>
