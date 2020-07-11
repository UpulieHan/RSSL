<?php
require('config.php');
?>

<!DOCTYPE html>

<html>

<head>   	
	  <title>Feedback Form</title>
	  
<link rel="stylesheet" type="text/css" href="css/feedback.css">	
<link rel="icon" href="images/download.png" size="16x16" type="image/x-icon"/>
<header>
	<div class="row">
			<div class="logo">
			<img src="images/logo.jpeg">
			</div>
		<ul class="main-nav" "clearfix">
			<li><a href="#">ABOUT</a></li>
			<li><a href="#">SERVICES</a></li>
			<li><a href="#">CONTACT US</a><li>
			<li class="active"><a href="">FEED BACK</a></li>
			<li><a href="#">NEWS</a></li>
			<li><a href="#">FAQS</a></li>
			
		</ul>
			
		</div>
	

</head>
<body style='background-image: url("images/4k.jpg");
			 height: 100%;
			 width: 100%; 
    		/* Center and scale the image nicely */
    		background-position: stretch;
    		background-repeat: no-repeat;
    		background-size: cover;'>
    		

   
  	<div class="feedback_form">  		

		<form name="myForm" method="post" onsubmit="return validateForm();">

			<br>

			<div style="text-align: center;">
			<select class="select_catagory" name="select catagory">
				<option selected>Select catogary</option>
				<optgroup label="Professions">
					<option>Doctors</option>
					<option>Lawyers</option>
					<option>Etc</option>
				</optgroup>
				<option>Businessman</option>
				<option>Others</option>
			</select>
			</div>
			 
			 <br>

			 <label class="name"><b>Name</b></label>
			 <br><br>
			 <input type="text" name="fullName" class="first_three_inputs" placeholder="Your Fullname" id="Name">

			 <br><br><br>

			 <label class="name"><b>E-mail</b></label>
			 <br><br>
			 <input type="email" name="email" class="first_three_inputs" placeholder="Your E-mail address" id="email">

			 <br><br><br>

			 <label class="name"><b>Phone</b></label>
			 <br><br>
			 <input type="text" name="phone" class="first_three_inputs" placeholder="Contact number" id="Phone">

			 <br><br><br>

			 <label class="name"><b>Comments</b></label>
			 <br><br>			  
			 <textarea rows="15" cols="148" id="textarea_feedback_form" id="Comments"> </textarea>
			 
			 <br><br><br>

			 <div style="text-align: center;">
			 	<input type="submit" name="submit" value="submit" id="submit_feedback_form">
			 				 </div>

			 <br><br><br>

		</form>
	</div>
<script>
	function validateForm(){
		var x = document.forms["myForm"]["Name"].value;
		var y = document.forms["myForm"]["email"].value;
		if(x==""){
			alert("Name must be filled out");
			return false;
		}
		else if(y==""){
			alert("E-mail must be filled out");
			return false;
		}
	}
</script>			
 </body>
</html>

<?php

if(isset($_POST['submit'])){
	$name =$_POST['name'];
	$email =$_POST['email'];
	$Phone =$_POST['Phone'];
	$Comments =$_POST['Comments'];

	$sql ="INSERT INTO feedback(name,email,Phone,Comments) VALUES('$name','$email','$Phone','$Comments')";
	if($mysql_query($conn,$sql)===TRUE) { ?>
		<script>alert("Succefully!");</script>
	<?php
	}
	else{ ?>
			<script>alert("Error");</script>
	<?php
	}			
	
}
?>	