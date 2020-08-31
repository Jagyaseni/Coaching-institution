<?php
	$con=@mysqli_connect("localhost:3306","root","","fani");
		if(mysqli_connect_errno())
		{
			die("database server error");
		}

?>