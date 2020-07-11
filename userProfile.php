<!DOCTYPE html>
<html>
<head>
	<title>User Profile</title>
	<link rel="stylesheet" type="text/css" href="css/maintheme.css">
	<link rel="stylesheet" type="text/css" href="css/userProfile.css">
	
	<?php //Linking the configuration file
	require ('config.php') ?>

	<link rel="shortcut icon" href="images/favicon.png">
</head>
<body>
	<div class="wrapper">
		<header>
			<div class="row">

				<div class="logo">
					<img src="images/black.jpg">
				</div><!-- logo -->

				<ul class="main-nav">
					<li class="active"><a href="">HOME</a></li>
					<li><a href="#">ABOUT</a></li>
					<li><a href="#">SERVICES</a></li>
					<li><a href="#">FAQS</a></li>
					<li><a href="#">NEWS</a></li>
					<li><a href="#">FAQS</a></li>	
				</ul>
			</div><!-- row -->
		</header>

		<div class="right_panel">

			<label>First Name : </label><br/>
				<label></label><br/>
			<label>Last Name : </label><br/>
				<label></label><br/>
			<label>DOB : </label><br/>
				<label></label><br/>
			<label>Address : </label><br/>
				<label></label><br/>
			<label>NIC : </label><br/>
				<label></label><br/>
			<label>email : </label><br/>
				<label></label><br/>
			<label>Package ID : </label><br/>
				<label></label><br/>



		</div><!-- right_panel -->

		<div class="left_panel">

			<form action="userDetailsInsert.php" method="post" enctype="multipart/form-data">
		    Select image to upload:<br/>
			    <input type="file" name="fileToUpload" id="fileToUpload"><br/>
			    <input type="submit" value="Upload Image" name="submit"><br/>

			    <?php 
				    $sql = "SELECT image FROM customer WHERE email='kathyperera@gmail.com' "; //$_GET['email']
					$result = mysqli_query($conn,$sql);
					
				?>	<!-- 
				<img src="uploads/.<?php $result?>.">
 -->				<?php	$conn->close(); ?>

			</form>
		</div><!-- left_panel -->
	</div><!-- wrapper -->

</body>
</html>