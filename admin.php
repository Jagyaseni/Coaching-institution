<?php
	session_start();
	if($_SERVER["REQUEST_METHOD"]=="POST")
	{
		$con=mysqli_connect("localhost","root","","fani") or die("connection failed");
		$username=$_REQUEST["username"];
		$password=$_REQUEST["password"];

		$result= mysqli_query($con,"select * from adminmaster where adminid='$username' and password='$password'");

		if(mysqli_fetch_assoc($result))
		{
			$_SESSION["akey"]=$username;
			header('location:adminhome.php');
		}else{
			$msg="Invalid uid and pwd";
		}
	}
	include 'admintop.php';
	include 'amenu.php';
?>



<div class="courses_banner">
  	<div class="container">
  		<h3>Admin Page</h3>
  		<p class="description">
             Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer lorem quam, adipiscing condimentum tristique vel, eleifend sed turpis. Pellentesque cursus arcu id magna euismod in elementum purus molestie.
        </p>
        <div class="breadcrumb1">
            <ul>
                <li class="icon6"><a href="index.php">Home</a></li>
                <li class="current-page">Login</li>
            </ul>
        </div>
  	</div>
  </div>
    <!-- //banner -->
	<div class="courses_box1">
	   <div class="container">
	   	  <form class="login" method="post">
	    	<p class="lead">Welcome Back!</p>
		    <div class="form-group">
			    <input autocomplete="off" type="text" name="username" id="username" class="required form-control" placeholder="Username">
		    </div>
		    <div class="form-group">
			    <input autocomplete="off" type="password" class="password required form-control" placeholder="Password" name="password" id="password">
		    </div>
		    <div class="form-group">
		    	
		    	<input type="submit" class="btn btn-primary btn-lg1 btn-block" name="submit" value="Log In">
		    </div>
	        
		 </form>
	   </div>
</div>


<?php
	include 'footer.php';
?>