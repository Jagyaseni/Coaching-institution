<?php
	
	$b1=$_REQUEST["b1"];
	$b1();
	function delete()
	{
		$con=mysqli_connect("localhost","root","","fani") or die("connectiom failed");

		$username=$_REQUEST["username"];
		$result=mysqli_query($con,"delete from usermaster where username='$username'");
		header('location:viewusers.php');
	}
	function edit()
	{
		$username=$_REQUEST["username"];
		header('location:edit.php?username='.$username);
	}



?>