<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Delete</title>
</head>

<body>
<?php
	include "connection.php";
	
	$a=$_GET["name"];

	$qu=mysqli_query($con,"delete from registration where name='$a'");
	
	if($qu){
		header("Location:select.php");
	}
	else{
		
	}
?>
</body>
</html>
