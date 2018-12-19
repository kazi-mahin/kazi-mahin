<?php
	$us_name =$_REQUEST["us_name"];
	$us_addr =$_REQUEST["us_addr"];

	
	require_once("setup.php");
	
	$query = "INSERT INTO d_b1(name,addr) VALUES('$us_name','$us_addr')";
	
	$run = mysqli_query($con,$query);
	
	
	if($run == true){
		
		header("location: index.php");
		
	}
	
	


?>