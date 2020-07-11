<?php
require('config.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Sign In Page</title>
	<link rel="stylesheet" type="text/css" href="css/sign in.css">
</head>
<body>
	<div class="loginbox">
	<img src="images/avatar.jpg" class="avatar">
		<h1>Login Here</h1>	
		<form name="signin" onsubmit="return validation()">
			<p>Username</p>
			<input type="text" name="uname" placeholder="Enter Username">
			<p>Password</p>
			<input type="Password" name="pwd" placeholder="Enter Password">
			<input type="submit" name="" value="Login">
			<a href="#">Forgot your password?</a><br>
			<a href="#">Don't have an account?</a>
		</form>	
	</div><!--loginbox-->

<script>
	function validation() {
		var uname = document.login.uname.value;
		var pwd = document.login.pwd.value;

		//Check empty field

		if (uname=="" || pwd=="") {
			alert("Both fields should not be blank");
			return;
		}

		//Check size of password

		if (pwd.length<6 || pwd.length>12) {
			alert("Password must be 6 to 12 characters");
			return;
		}

		//username should notstart with _,@ and number

		var str=uname.slice(0,1);
		if (uname.slice(0,1)=="" || uname.slice(0,1)=="@" || str.match(/[0,9]/g)!=null) {
			alert("Username should not start with _,@ and number");
			return;
		}
	}
</script>
</body>
</html>

<?php

if(isset($_POST['mybtn'])){
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	$sql = "INSERT INTO signin(username,password) VALUES('$username','$password')";
	if(mysqli_query($conn,$sql)==true){ ?>
		<script>alert("Successfully logged in!");</script>
	<?php 	
	}
	else{ ?>
		<script>alert("Please check your username & password!");</script>
	<?php
	}
	
}


?>
 
