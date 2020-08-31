<?php
	$con=mysqli_connect("localhost","root","","fani");
	$username=$_REQUEST["username"];
	$password=$_REQUEST["password"];
	$securityquestion=$_REQUEST["securityquestion"];
	$answer=$_REQUEST["answer"];
	$result=mysqli_query ($con ,"update usermaster set password='$password' securityquestion='$securityquestion' answer='$answer' where username='$username'");

	if(mysqli_affected_rows($con)>0)
	{
		header("location:viewusers.php");
	}
?> 