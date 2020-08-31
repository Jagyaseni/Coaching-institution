<table border="1px" width="100%">
	<caption>Userdata</caption>
	<tr><th>username</th><th>password</th><th>securityquestion</th><th>answer</th><th>Action</th></tr>

<?php
	$con=mysqli_connect("localhost","root","","fani") or die ("connection failed");

	$result=mysqli_query($con,"select * from usermaster");
	while($arr=mysqli_fetch_assoc($result))
	{
		echo '<tr>';
		echo '<form action="manage.php">';
		echo '<th>'.$arr["name"]."</th>";
		echo '<th>'.$arr["password"]."</th>";
		echo '<th>'.$arr["securityquestion"]."</th>";
		echo '<th>'.$arr["answer"]."</th>";
		echo '<td>
		<input type="hidden" value="'.$arr["username"].'" name="username" />
		<input type="submit" value="delete" name="b1" />
		<input type="submit" value="edit" name="b1" /></td>';
		echo '</form>';
		echo '</tr>';
	}
?>
</table>