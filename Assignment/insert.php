<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Insert</title>
	<link rel="stylesheet" href="Library/css/bootstrap.min.css">
	<script src="Library/js/bootstrap.min.js"></script>
</head>
	
	<div class="container">
		<br><br>
		<br><br>
		
		<h1 class="text-center text-dark" >Insert Student Information</h1>
		
		<br><br>
<form action="" method="post" enctype="multipart/form-data">	
	
<div class="row g-3">
	
  	<div class="col">
    	<input type="number" class="form-control" name="id" placeholder="Id">
 	</div>
	
 	<div class="col">
    	<input type="text" class="form-control" name="name" placeholder="Name">
 	</div>
	
</div>	
	<br><br>
		
<div class="row g-3">
	
	<div class="col">
    	<input type="text" class="form-control" name="father_name" placeholder="Father Name">
 	</div>
	
 	<div class="col">
    	<input type="text" class="form-control" name="course" placeholder="Course">
 	</div>

</div>
	<br><br>
		
<div class="row g-3">
	
	<div class="col">
    	<input type="password" class="form-control" name="password" placeholder="Password">
 	</div>
	
 	<div class="col">
    	<input type="file" class="form-control" name="picture">
 	</div>
	
</div>
	<br><br>
	<center>
				
		<input class="btn btn-dark" type="submit" name="add" value="Add">
				
	</center>	
	
</form>	
	</div>

<body>
</body>
</html>


<?php
	
include "connection.php";


?>

<?php

	if(isset($_POST["add"])){
		$a=$_POST["id"];
		$n=$_POST["name"];
		$fn=$_POST["father_name"];
		$c=$_POST["course"];
		$p=$_POST["password"];
//		$hass=md5($p);
		$f=$_FILES["picture"]["name"];
		$oldlocation=$_FILES["picture"]["tmp_name"];
		$newlocation="img/".$f;
		
		move_uploaded_file($oldlocation,$newlocation);
		
		$qu=mysqli_query($con,"INSERT INTO `student_info`(`Id`, `Name`, `Father Name`, `Course`, `Password`, `Picture`) VALUES ('$a','$n','$fn','$c','$p','$f')");
		
		if($qu){
			
			header("Location:login.php");
				
		}
		else{
			
			echo("Data has not been Inserted");
			
		}
	}

?>



















