<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Sign Up</title>
	<link rel="stylesheet" type="text/css" href="css/sign up.css">
	<link rel="icon" href="images/download.png" size="16x16" type="image/x-icon"/>
</head>
<body>

	<div class="login-box">
		<div class="left-box">
			<h1>Sign Up</h1>
			<form method="post" action="signup.php">
				<!-- display validation errors here-->
				<?php include('errors.php'); ?>
				<p>Username</p>
				<input type="text" name=username" placeholder="Enter Username" value="<?php echo $username; ?>">
				<p>Email</p>
				<input type="text" name="email" placeholder="Enter Email" value="<?php echo $email; ?>">
				<p>Password</p>
				<input type="password" name="password" placeholder="Enter Password">
				<p>ReEnter Password</p>
				<input type="password" name="password_confirmation" placeholder="password_confirmation">
				<input type="submit" name="Sign Up" class="btn" value="Sign Up">
			</form>
		</div><!--left-box-->

	
	</div><!--login-box-->

</body>
</html>