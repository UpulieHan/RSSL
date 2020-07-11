<?php
require('config.php');
?>
<!DOCTYPE html>

<html>
<head>
	<title>Road Saviours Sri Lanka </title>
	<link rel="stylesheet" type="text/css" href="css/contact.css">
</head>
<body>
	
	<header>
		<div class="row">
			<div class="logo">
			<img src="images/logo.jpeg">
			</div>
		<ul class="main-nav" "clearfix">
			<li><a href="#">ABOUT</a></li>
			<li><a href="#">SERVICES</a></li>
			<li class="active"><a href="">CONTACT US</a></li>
			<li><a href="#">NEWS</a></li>
			<li><a href="#">FAQS</a></li>
			
		</ul>
			
		</div>

		<div class="hero">
		<h1>Contact Us</h1>
		<h3>
			<ul class= "con"><b>
			<li>Call Us: <a href="#"> +9477 767 8678  / +9411 2678 678</a> </li><br>
			<li>E-mail: <a href="#"> rssl@gmail.com</a> </li> <br>
			<li>Address:<a href="#"> No.06, Kandy Road, Malabe, Sri Lanka.</a> </li>
			</b></ul>

		</h3>
		<p id="send">
			<textarea rows="20" cols="160" > Write your message here...</textarea> 
			
				<a onclick="myFunction() "href="" class="btn"> SEND </a>

<!--JavaScript Fuction-->			
<script>
	function myFunction() {
    
    var person = prompt("Please enter your name:", "Name");
    var num = prompt("Please enter your Contact number:", "Contact number");
    if (person == null || person == "" || num == null || num == "" ) {
       alert("Message sending failed! Please try again.");
    } else {
         alert("Hi " + person + " your message has successfully sent!");
    }
    document.getElementById("send").innerHTML = txt;
}
</script>

		</p>
		</div>

	
	</header>

</body>
</html>

<?php

if(isset($_POST['mybtn'])){
	$contactus = $_POST['Message'];

	$sql = "INSERT INTO contactus(Message) VALUES('$Messege')";
	if(mysqli_query($conn,$sql)==true){ ?>
		<script>alert("Succefully!");</script>
	<?php 	
	}
	else{ ?>
		<script>alert("Error!");</script>
	<?php
	}
	
}