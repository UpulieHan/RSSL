<!DOCTYPE html>
<html>
<head>
	<title>Profile Edit</title>
	<link rel="stylesheet" type="text/css" href="css/maintheme.css">
	<link rel="stylesheet" type="text/css" href="css/userProfileEdit.css">
	
	<?php //Linking the configuration file
	require ('config.php') ?>

	<link rel="shortcut icon" href="images/favicon.png">
</head>
<body>
	<div class="wrapper" style="">
		<header>
			<div class="row">
				<div class="logo">
					<img src="images/logo.jpg">
				</div>
			<ul class="main-nav" "clearfix">
				<li><a href="home.html">HOME</a></li>
				<li><a href="about.html">ABOUT US</a></li>
				<li><a href="services.html">SERVICES</a></li>
				<li><a href="feedback.html">FEEDBACK</a></li>
				<li><a href="contactus.html">CONTACT US</a></li>
			</ul>
		</div>

		</header>

		<div class="right_panel">
			<table border="1">
			<caption style="font-size: 2em">Customer Profile</caption>
			<?php
				$sql = "SELECT * FROM customer WHERE email='kathyperera@gmail.com'";
				$result = mysqli_query($conn,$sql);
				if ($result -> num_rows> 0){
					while ($row = $result -> fetch_array()){?>
						<form action="userDetailsInsert.php" method="post">
							<tr>
								<th>NIC</th>
								<td><input type="text" name="nic" placeholder="<?php echo $row ['NIC']?>"></td>
							</tr>
							<tr>
							    <th>First Name </th>
								<td><input type="text" name="fname" placeholder="<?php echo $row ['fname']?>"></td>
							</tr>
							<tr>
					   			<th>Last Name </th>
								<td><input type="text" name="lname" placeholder="<?php echo $row ['lname']?>"></td>
							</tr>
							<tr>
					   			<th>Address</th>
								<td><input type="text" name="address" placeholder="<?php echo $row ['address']?>"></td>
							</tr>
							<tr>
								<th>email</th>
								<td><input type="text" name="email" placeholder="<?php echo $row ['email']?>"></td>
							</tr>
							<tr>
								<th>Package ID</th>
								<td><input type="text" name="packageID" placeholder="<?php echo $row ['packageID']?>"></td>
							</tr>
						</form>
							<?php $img=($row ['image'])?>
							<?php $fname=($row ['fname'])?>
							<?php $lname=($row ['lname'])?>
							<?php $pwd=($row ['password'])?>
						    <?php $path= "uploads/$img" ?>
			<?php }}?>
			</table>
		</div><!-- right_panel -->

		<div class="left_panel">
			<img src="<?php echo $path?>">
			<h2><?php echo $fname." ".$lname ?></h2>
			<br/><br/>
			<form action="userDetailsInsert.php" method="post" enctype="multipart/form-data">
				<p style="color: white; font-size: 1.3em">Select image to upload:</p><br/>
					<input type="file" name="fileToUpload" id="fileToUpload"><br/>
					<input type="submit" value="Upload Image" name="submit" onclick="imageChange()"><br/>
					<input type="button" name="update" value="Update Details">
			</form>
		</div><!-- left_panel -->
	</div><!-- wrapper -->

<!-- check this out when reuploading -->
<script type="text/javascript">
	function imageChange(){
		<img src="<?php echo $path?>">
	}

</script>

</body>
</html>