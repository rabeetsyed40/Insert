<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Information</title>
	<link rel="stylesheet" href="Library/css/bootstrap.min.css">
	<script src="Library/js/bootstrap.min.js"></script>
</head>
<body>
	<?php
		
	include "connection.php";
	
	?>
	
<div class="container">	
	
	<br><br>
	
	<h1 class="text-center text-success">Student Information</h1>
	
	<br><br>
<a href="registration.php" class="btn btn-success">Create</a>
<a href="login.php" class="btn btn-success">Log In</a>	
	
	<br><br>

<table class="table	 table-bordered text-center">
	
<tr class="text-success">
	
	<td>Name</td>
	<td>Email</td>
	<td>Gender</td>
	<td>Password</td>
	<td>Confirm Password</td>
	<td>Timings</td>
    <td>Action</td>
</tr>
	
	<?php
	
		$qu=mysqli_query($con,"select * from registration");
	
		while($row=mysqli_fetch_array($qu)){
			
			echo"
				<tr>
					<td>$row[0]</td>
					<td>$row[1]</td>
					<td>$row[2]</td>
					<td>$row[3]</td>
					<td>$row[4]</td>
					<td>$row[5]</td>
					<td><a href='delete.php?name=$row[0]' class='btn btn-outline-dark'>Delete</a> | <a href='update.php?name=$row[0]' class='btn btn-outline-dark'>Update</a></td>
				</tr>
			
			
			";
			
		}
	?>
	
</table>	
	
</div>	
</body>
</html>
