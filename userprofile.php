<?php
session_start();
include "usertop.php";
include "umenu.php";
?>
<?php
	
	include "db.php";
	$con=mysqli_query($con,"select * from usermaster where username='".$_SESSION['ukey']."'");
	if($arr=mysqli_fetch_array($con))
	{
		$username=$arr['username'];
		$name=$arr['name'];
		$password=$arr['password'];
		$email=$arr['email'];
		$securityquestion=$arr['securityquestion'];
		$answer=$arr['answer'];
	}
?>
<center>
	<h1>Profile Details</h1>
	<form method="post">
		<table>
			<tr><td>name</td><td><input type="text" value="<?php echo $name; ?>" name="name"></td></tr>
			<tr><td>username</td><td><label><?php echo $username; ?></label></td></tr>
			<tr><td>password</td><td><input type="text" name="password" value="<?php echo $password ?>"></td></tr>
			<tr><td>emai</td><td><input type="text" name="email" value="<?php echo $email ?>"></td></tr>
			<tr><td>Security Question</td><td><label><?php echo $securityquestion; ?></label></td></tr>
			<tr><td>Answer</td><td><input type="text" name="answer" value="<?php echo $answer ?>"></td></tr>
			<tr><td></td><td><input type="submit" name="upbtn" value="update"></td></tr>
			<tr><td></td><td></td></tr>
		</table>
	</form>
</center>

<?php
	if(isset($_POST['upbtn']))
	{
		include "db.php";
		$username=$_POST['name'];
		$email=$_POST['email'];
		$answer=$_POST['answer'];
		mysqli_query($con,"update usermaster set name='".$name."' , email='".$email."' , answer='".$answer."' where username='".$_SESSION['ukey']."'");
	}
	

?>



<?php
include "footer.php";
?>