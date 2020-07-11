<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Sign In Page</title>
	<link rel="stylesheet" type="text/css" href="css/sign in.css">
	<link rel="icon" href="images/download.png" size="16x16" type="image/x-icon"/>
</head>
<body>
	<div class="loginbox">
	<img src="images/avatar.jpg" class="avatar">
		<h1>Login Here</h1>	
		<form method="post" action="login.php">
			<!-- display validation errors here-->
			<?php include('errors.php'); ?>
			<p>Username</p>
			<input type="text" name="uname" placeholder="Enter Username">
			<p>Password</p>
			<input type="Password" name="pwd" placeholder="Enter Password">
			<select class="selectbtn">
				<option value="Customer">Customer</option>
				<option value="Technician">Technician</option>
				<option value="Admin">Admin</option>
			</select>
			<input type="submit" name="login" class="btn" value="Login">
			<a href="userprofile.php">Forgot your password?</a><br>
			<a href="sign up.html">Don't have an account?</a>
		</form>	
	</div><!--loginbox-->

</body>
</html>