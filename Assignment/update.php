<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Update</title>
	<link rel="stylesheet" href="Library/css/bootstrap.min.css">
	<script src="Library/js/bootstrap.min.js"></script>
	<script src="Library/jquery/jquery-3.6.0.min.js"></script>
</head>

<body>
	
<div class="container">
	
	<br><br>
	
<center>
	
	<h1 class="text-success">UPDATE</h1>
	
	<br><br>
</center>	
	<form action="" method="post" enctype="multipart/form-data">	
	
<div class="row g-"3>
	
 	<div class="col">
    	<input type="text" class="form-control" placeholder="Name"  value="<?php echo $row[0];  ?>" name="name">
 	</div>
	
</div>	
		<br>
		
<div class="row g-"3>
	
 	<div class="col">
    	<input type="email" class="form-control" placeholder="Email"  value="<?php echo $row[1];  ?>" name="email">
 	</div>
	
</div>	
		<br>
		
<div class="row g-"3>
		
	<div class="col">
		<input type="radio" value="male"   value="<?php echo $row[2];  ?>" name="gender"> Male 
		<input type="radio" value="female"  value="<?php echo $row[2];  ?>" name="gender"> Female
	</div>
			
</div>
		<br>
		
<div class="row g-"3>
	
 	<div class="col">
		
    	<input type="password" class="form-control" placeholder="Password" id="a"   value="<?php echo $row[3];  ?>" name="password">
				
		<br>
		
		<input type="checkbox" id="b"> <label>Show Password</label>
		
 	</div>
	
</div>	
		
		<br>
		
<div class="row g-3">
	
 	<div class="col">
    	<input type="password" class="form-control" placeholder="Confirm Password" id="c"   value="<?php echo $row[4];  ?>" name="confirm_password">
		
		<br>
		
		<input type="checkbox" id="d"> <label>Show Password</label>
		
		<br><br>
		
		<input type="submit" class="btn btn-success" name="btn" value="Update">
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
	
	$a=$_GET["name"];

	$abc=mysqli_query($con,"select * from registration where name='$a'");
 
	$row=mysqli_fetch_array($abc);

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
			
		$qu=mysqli_query($con,"UPDATE `registration` SET `Name`='$n',`Email`='$e',`Gender`='$g',`Password`='$hass',`Confirm Password`='$cpass' WHERE name='$n'");
			
		if($qu){
			
			header("location:select.php");
			
		}	
		
		else{
			
			echo"Data has not been Successfully Updated";
			
		}	
	
		}
	?>
