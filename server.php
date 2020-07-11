<?php
	session_start();
	$username = "";
	$email = "";
	$errors = array();

	// connect to the database
	$db = mysql_connect('localhost', 'root', '', 'signup');

	// if the signup button is clicked
	if (isset($_POST['Sign Up'])) {

		$username = mysql_real_escape_string($_POST['username']);
		$email = mysql_real_escape_string($_POST['email']);
		$password = mysql_real_escape_string($_POST['password']);
		$password_confirmation = mysql_real_escape_string($_POST['password_confirmation']);

		//ensure that form fields are filled properly
		if (empty($username)) {

			array_push($errors, "Username is required");
		}

		if (empty($email)) {

			array_push($errors, "Email is required");
		}

		if (empty($password)) {

			array_push($errors, "password is required");
		}

		if ($password != $password_confirmation) {

			array_push($errors, "The two passwords do not match");
		}

		//if there are no errors, save user to database
		if (count($errors) ==0) {

			$password = md5($password); //encrypt password before storing in database
			$sql = "INSERT INTO users (username, email, password)
			VALUES ('$username', '$email', '$password')";
			mysql_query($db, $sql);
			$_SESSION['username'] = $username;
			$_SESSION['success'] = "You are now logged in";
			header('location: home.html'); //redirect to home page 
		}
	}

	//log user in sign in page
	if (isset($_POST['Login'])) {

		$username = mysql_real_escape_string($_POST['username']);
		$password = mysql_real_escape_string($_POST['password']);


		//ensure that form fields are filled properly
		if (empty($username)) {

			array_push($errors, "Username is required");
		}
		if (empty($password)) {

			array_push($errors, "password is required");
		}

		if (count($errors) ==0 ) {

			$password = md5($password);//encrypt password before comparing with that from database
			$query = "SELECT * FROM users WHERE username='$username' AND password = '$password'";
			$result = mysqli_query($db, $query);
			if (mysqli_num_rows($result) == 1) {

				//log user in
				$_SESSION['username'] = $username;
				$_SESSION['success'] = "You are now logged in";
				header('location: home.html');
			}
			else{

				array_push($errors, "Wrong username/password combination");
				header('location: sign in.php')
			}
		}
	}

	//logout
	if (isset($_GET['Logout'])){

		session_destroy();
		unset($_SESSION['username']);
		header('location: sign in.php');
	}

?>