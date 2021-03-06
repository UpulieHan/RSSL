<!DOCTYPE html>
<html>
<head>
	<title>Sign Up</title>
	<link rel="stylesheet" type="text/css" href="css/sign up.css">
</head>
<body>

	<div class="login-box">
		<div class="left-box">
			<h1>Sign Up</h1>
			<form method="POST" action="index.php" onsubmit="return Validate()" name="vform">
				<p>Username</p>
				<input type="text" name=username" class="textInput" placeholder="Enter Username">
				<div id="name_error" class="val_error"></div>
				<p>Email</p>
				<input type="text" name="email" class="textInput"  placeholder="Enter Email">
				<div id="email_error" class="val_error"></div>
				<p>Password</p>
				<input type="password" name="password" class="textInput" placeholder="Enter Password">
				<p>ReEnter Password</p>
				<input type="password" name="password_confirmation" class="textInput" placeholder="password_confirmation">
				<div id="password_error" class="val_error"></div>
				<input type="submit" name="Sign Up" class="btn" value="Sign Up">
			</form>
		</div><!--left-box-->

		<div class="right-box">
			<span class="signinwith">Sign in with<br>Social Network</span>

			<button class="social facebook">Log in with facebook</button>
			<button class="social twitter">Log in with Twitter</button>
			<button class="social google">Log in with Google+</button>
		</div><!--right-box-->

		<div class="or">
			<p>OR</p>
		</div><!--or-->
	</div><!--login-box-->

<script type="text/javascript">
	//Getting all input text objects

	var username = document.forms["vform"]["username"];
	var email = document.forms["vform"]["email"];
	var password = document.forms["vform"]["password"];
	var password_confirmation = document.forms["vform"]["password_confirmation"];

	//Getting all error display objects

	var name_error = document.getElementsById("name_error");
	var email_error = document.getElementsById("email_error");
	var password_error = document.getElementsById("password_error");

	//Setting all event listeners

	username.addEventListner("blur", nameVerify, true);
	email.addEventListner("blur", emailVerify, true);
	password.addEventListner("blur", passwordVerify, true);

	//Validation function

	function Validate(){
		//Username validation

		if (username.value == "") {
			username.style.border = "1px border red";
			name_error.textContent = "Username is required";
			username.focus();
			return false;
		}
		//Email validation

		if (email.value == "") {
			email.style.border = "1px border red";
			email_error.textContent = "Email is required";
			email.focus();
			return false;
		}
		//Password validation

		if (password.value == "") {
			password.style.border = "1px border red";
			password_error.textContent = "Password is required";
			password.focus();
			return false;
		}

		if (password.value != password_confirmation.value) {
			password.style.border = "1px solid red";
			password_confirmation.style.border = "1px solid red";
			password_error.innerHTML = "Two passwords do not match";
			return false;
		}
	}

	//Event handler functions

	function nameVerify() {
	 	if (username.value != "") {
	 		username.style.border = "ipx solid #5E6E66";
	 		name_error.innerHTML = "";
	 		return true;
	 	}
	 }	
	 function emailVerify() {
	 	if (email.value != "") {
	 		email.style.border = "ipx solid #5E6E66";
	 		email_error.innerHTML = "";
	 		return true;
	 	}
	 }	
	 function passwordVerify() {
	 	if (password.value != "") {
	 		password.style.border = "ipx solid #5E6E66";
	 		password_error.innerHTML = "";
	 		return true;
	 	}
	 } 
</script>

</body>
</html>