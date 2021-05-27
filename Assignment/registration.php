<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Registration</title>
	<link rel="stylesheet" href="Library/css/bootstrap.min.css">
	<script src="Library/js/bootstrap.min.js"></script>
	<script src="Library/jquery/jquery-3.6.0.min.js"></script>
</head>

<body>
			
<div class="container">
	<br><br>
	
<center>
	
	<h1 class="text-success">REGISTRATION</h1>
	
	<br><br>
</center>	
	<form action="" method="post" enctype="multipart/form-data">	
	
<div class="row g-"3>
	
 	<div class="col">
    	<input type="text" class="form-control" name="name" placeholder="Name">
 	</div>
	
</div>	
		<br>
		
<div class="row g-"3>
	
 	<div class="col">
    	<input type="email" class="form-control" name="email" placeholder="Email">
 	</div>
	
</div>	
		<br>
		
<div class="row g-"3>
		
	<div class="col">
		<input type="radio" name="gender" value="male"> Male 
		<input type="radio" name="gender" value="female"> Female
	</div>
			
</div>
		<br>
		
<div class="row g-"3>
	
 	<div class="col">
		
    	<input type="password" class="form-control" name="password" placeholder="Password" id="a">
				
		<br>
		
		<input type="checkbox" id="b"> <label>Show Password</label>
		
 	</div>
	
</div>	
		
		<br>
		
<div class="row g-3">
	
 	<div class="col">
    	<input type="password" class="form-control" name="confirm_password" placeholder="Confirm Password" id="c">
		
		<br>
		
		<input type="checkbox" id="d"> <label>Show Password</label>
		
		<br><br>
		
		<input type="submit" class="btn btn-success" name="btn" value="Register" onClick="return Validate();">
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
	
	$(document).ready(function(){
 $("#d").change(function(){
  
  // Check the checkbox state
  if($(this).is(':checked')){
   // Changing type attribute
   $("#c").attr("type","text");
   
   // Change the Text
   $("#d").text("Hide");
  }else{
   // Changing type attribute
   $("#c").attr("type","password");
  
   // Change the Text
   $("#d").text("Show");
  }
 
 });
});
	
</script>
	
	
	<?php
	
	
	include "connection.php";
	
	
	?>
	
	<?php
	
		if(isset($_POST["btn"])){
		$n=$_POST["name"];
		$e=$_POST["email"];
		$g=$_POST["gender"];
		$p=$_POST["password"];
		$hass=md5($p);	
		$cp=$_POST["confirm_password"];
		$cpass=md5($cp);
			
		$qu=mysqli_query($con,"INSERT INTO `registration`(`Name`, `Email`, `Gender`, `Password`, `Confirm Password`) VALUES ('$n','$e','$g','$hass','$cpass')");
			
		if($qu){
			
			header("location:select.php");
			
		}	
		
		else{
			
			echo"Data has not been Successfully Registered";
			
		}	
	
		}
	?>
	
	
	
