<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Learn an Education Category Flat Bootstarp Resposive Website Template | Home :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Learn Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap-3.1.1.min.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="css/jquery.countdown.css" />

<link href='//fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700' rel='stylesheet' type='text/css'>
<!----font-Awesome----->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!----font-Awesome----->
<script>
$(document).ready(function(){
    $(".dropdown").hover(            
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
            $(this).toggleClass('open');        
        },
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
            $(this).toggleClass('open');       
        }
    );
});
</script>
</head>
<body>
<nav class="navbar navbar-default" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html">Learn</a>
        </div>
        <!--/.navbar-header-->
        <div class="navbar-collapse collapse" id="bs-example-navbar-collapse-1" style="height: 1px;">
            <ul class="nav navbar-nav">
                
                <li class="dropdown">
                    <a href="login.php"><i class="fa fa-user"></i><span>Login</span></a>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-list"></i><span>Courses</span></a>
                      <ul class="dropdown-menu">
                        <li><a href="courses.html">Courses Categories</a></li>
                        <li><a href="courses.html">Courses list</a></li>
                        <li><a href="course_detail.html">Courses detail</a></li>
                      </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-calendar"></i><span>Events</span></a>
                     <ul class="dropdown-menu">
                        <li><a href="events.html">Event1</a></li>
                        <li><a href="events.html">Event2</a></li>
                        <li><a href="events.html">Event3</a></li>
                     </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-globe"></i><span>English</span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#"><span><i class="flags us"></i><span>English</span></span></a></li>
                        <li><a href="#"><span><i class="flags newzland"></i><span>Newzland</span></span></a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-search"></i><span>Search</span></a>
                    <ul class="dropdown-menu search-form">
                       <form>        
                            <input type="text" class="search-text" name="s" placeholder="Search...">    
                            <button type="submit" class="search-submit"><i class="fa fa-search"></i></button>
                       </form>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="clearfix"> </div>
      </div>
        <!--/.navbar-collapse-->
</nav>
<?php 
		include 'menu.php';;
?>
<?php
	if($_SERVER["REQUEST_METHOD"]=="POST")
	{
		$con=mysqli_connect("localhost","root","","fani") or die("connection failed");
		$name=$_REQUEST["Name"];
		$username=$_REQUEST["username"];
		$password=$_REQUEST["password"];
		$email=$_REQUEST["email"];
		$securityquestion=$_REQUEST["securityquestion"];
		$answer=$_REQUEST["answer"];

		mysqli_query($con,"insert into usermaster values('$name','$username','$password','$email','$securityquestion','$answer')");
		if(mysqli_affected_rows($con)>0)
		{
			$msg="Register Success";
		}else{
			$msg="Try Again";
		}
	}
?>

<div class="courses_banner">
  	<div class="container">
  		<h3>Register</h3>
  		<p class="description">
             Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer lorem quam, adipiscing condimentum tristique vel, eleifend sed turpis. Pellentesque cursus arcu id magna euismod in elementum purus molestie.
        </p>
        <div class="breadcrumb1">
            <ul>
                <li class="icon6"><a href="index.php">Home</a></li>
                <li class="current-page">Register</li>
            </ul>
        </div>
  	</div>
  </div>
    <!-- //banner -->
	<div class="courses_box1">
	   <div class="container">
	   	  <form class="login" id="register-stu" method="post">
                <p class="lead">Register New Account</p>
                <div class="form-group">
                    <input type="text" autocomplete="off" class="required form-control" placeholder="Name *" name="Name" id="Name" value="">
                </div>
                <div class="form-group">
                    <input type="text" autocomplete="off" class="required form-control" placeholder="Username" name="username" id="username" value="">
                </div>
                <div class="form-group">
                    <input type="password" class="required form-control" placeholder="Password" name="password" id="password" value="">
                </div>
                <div class="form-group">
                    <input type="password" class="required form-control" placeholder="Conform Password *" name="cpassword" id="cpassword" value="">
                </div>
                <div class="form-group">
                    <input type="text" autocomplete="off" class="required form-control" placeholder="Email *" name="email" id="email" value="">
                </div>
                <div class="form-group">
                    <input type="text" autocomplete="off" class="required form-control" placeholder="Conform Email *" name="cemail" id="cemail" value="">
                </div>

                
                <div class="form-group">
                    <select autocomplete="off" class="required form-control" placeholder="Conform Email *" name="securityquestion" id="securityquestion">
                    	<option hidden="hidden">Securityquestion</option>
                    	<option value="pet name">pet name</option>
                    	<option value="fov color">fov color</option>
                    </select>
                </div>
                <div class="form-group">
                    <input type="text" autocomplete="off" class="required form-control" placeholder="Answer" name="answer" id="answer" value="" >
                </div>


                <div class="form-group">
                    <input type="submit" class="btn btn-primary btn-lg1 btn-block" name="submit" value="Register">
                </div>
                <p><?php $msg="Register Success"; ?></p>
                <p>Already have an account? <a href="login.php">Sign In</a></p>
            </form>
	   </div>
</div>


<?php
	include 'footer.php';
?>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/valid.js"></script>
<script type="text/javascript" src="js/projectscript.js"></script>

