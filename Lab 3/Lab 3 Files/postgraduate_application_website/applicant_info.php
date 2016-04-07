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
				<h2>Applicant Information:</h2>		
			</div>
			
			<div class="list">
  						<td>
   						<table cellspacing="0" cellpadding="1" border="1" width="800" >
     							<tr style="color:white;background-color:grey">
     							</tr>
         				<?php
						$id=$_GET['id'];
						$result = mysqli_query($db, "SELECT * FROM student_information WHERE id=$id", 							MYSQLI_USE_RESULT);
 						if (!$result) 
						{
 							die("Database query failed: " . mysqli_error());
						}

 						while ($row = mysqli_fetch_array($result)) 
						{
							echo "<tr><td>Name and Surname</td><td>$row[1] </td></tr>";
							echo "<tr><td>Student/Person No.</td><td>$row[2] </td></tr>";
							echo "<tr><td>Contact Number</td><td>$row[3] </td></tr>";
							echo "<tr><td>Supervisor</td><td>$row[4] </td></tr>";
							echo "<tr><td>Undergraduate University</td><td>$row[5] </td></tr>";
							echo "<tr><td>Program</td><td>$row[6] </td></tr>";
						}
							?>
   						</table>
  						</td>
			</div>
			Documents:
			<div class="CV">
				<a href= "/test.pdf"> <img src="/pdfIcon" width="50" alt="CV" /> 
				</a>
			</div>

		</div>
	</div>	
	</body>
</html>
