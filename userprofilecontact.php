<?php
session_start();	
	include "db.php";
	$con=mysqli_query("select * from usermaster where username='".$_SESSION['username']."'");
	if($arr=mysqli_fetch_array($con))
	{
		$username=$arr['username'];
		$name=$arr['fullname'];
		$sec=$arr['squestion'];
		$ans1=$arr['answer'];
	}
?>
<center>
	<h1>Profile Details</h1>
	<form method="post">
		<table>
			<tr><td>name</td><td><input type="text" value="<?php echo $name; ?>" name="name"></td></tr>
			<tr><td>username</td><td><label><?php echo $username; ?></label></td></tr>
			<tr><td>Security Question</td><td><select name="sq"><option>fav color</option><option>pet name</option></select></td></tr>
			<tr><td>Answer</td><td><input type="textr" name="ans" value="<?php echo $ans1 ?>"></td></tr>
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
		$sq=$_POST['sq'];
		$ans=$_POST['ans'];
		mysqli_query("update usermaster set fullname='".$username."', sq='".$sq."', answer='".$ans."' where username='".$_SESSION['username']."'");
	}
	

?>