<?php
	$con=mysqli_connect("localhost","root","","fani");
	$username=$_REQUEST["username"];
	$result=mysqli_query($con,"select * from usermaster where username='$username'");
	$arr=mysqli_fetch_assoc($result);
?>
<form action="update.php">
	username:<?php echo $arr["username"]; ?>
	<br>
	<input type="hidden" value="<?php echo $arr["username"]?>" name="username">
	<input type="text" value="<?php echo $arr["password"]?>" name="password">
	<input type="text" value="<?php echo $arr["securityquestion"]?>" name="securityquestion">
	<input type="text" value="<?php echo $arr["answer"]?>" name="answer">
	<br>
	<input type="submit" value="update">	
</form>