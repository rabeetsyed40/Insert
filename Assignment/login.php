<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Login</title>
	<link rel="stylesheet" href="Library/css/bootstrap.min.css">
	<script src="Library/js/bootstrap.min.js"></script>
	<script src="Library/jquery/jquery-3.6.0.min.js"></script>
</head>

<body>	
	
<div class="container">
	<br><br>
	
<center>
	
	<h1 class="text-success">LOGIN PAGE</h1>
	
	<br><br>
</center>	
	<form action="" method="post" enctype="multipart/form-data">	
	
<div class="row g-"3>
	
 	<div class="col">
    	<input type="text" class="form-control" name="name" placeholder="Name">
 	</div>
	
</div>	
		<br>
		
<div class="row g-3">
	
 	<div class="col">
    	<input type="password" class="form-control" name="password" placeholder="Password" id="a">
		
		<br>
		
		<input type="checkbox" id="b"> <label>Show Password</label>
		
		<br><br>
		
		<input type="submit" class="btn btn-success" name="btn">
 	</div>
	
	
</div>	

</div>
</body>
</html>
	
<script>
	
	$(document).ready(function(){
 $("#b").change(function(){
  
  // Check the checkbox state
  if($(this).is(':checked')){
   // Changing type attribute
   $("#a").attr("type","text");
   
   // Change the Text
   $("#b").text("Hide");
  }else{
   // Changing type attribute
   $("#a").attr("type","password");
  
   // Change the Text
   $("#b").text("Show");
  }
 
 });
});
	
	
	
</script>

	<?php
	
	include "connection.php"
	
	
	?>
	
	<?php
	
	if(isset($_POST["btn"])){
		
	$n=$_POST["name"];	
	$p=$_POST["password"];	
		
	$pass=md5($p);	
	$qu=mysqli_query($con,"SELECT * FROM `registration` WHERE Name='$n' && Password='$pass'");
		
	$rows=mysqli_num_rows($qu);
		
	if($rows!=0){
		
		header("location:dashboard.php");
	}	
	else{
		
		echo "<script>alert('Login Fail');</script>";
	}	
	}
	
	?>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	