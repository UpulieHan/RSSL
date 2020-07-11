<!DOCTYPE html>
<html>
<head>
	<title>Admin Page</title>
	<link rel="stylesheet" type="text/css" href="css/administration.css">
	<link rel="stylesheet" type="text/css" href="css/maintheme.css">
	<link rel="shortcut icon" href="images/favicon.png">
	
</head>
<body>
	<div class="wrapper">
		<header>
			<div class="row">

				<div class="logo">
					<img src="images/logo.jpg">
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
		<div class="button">
			<table>
				<tr><td><img src="images/users.png" onclick="location.href='userProfile.php'" title="User Profile"></td></tr>
				<tr><td><img src="images/calendar.png" onclick="location.href='https://calendar.google.com'" title="User Profile"></td></tr>
				<tr><td><img src="images/mail.png" onclick="location.href='https://mail.google.com'" title="User Profile"></td></tr>
				<tr><td><img src="images/settings.png" onclick="location.href='userDetails.php'" title="User Details"></td></tr>
			</table>

		</div><!-- button -->


		<div id="content">
			<iframe src="https://www.google.com/maps/d/embed?mid=1-4s7c5g1cHHi7yRsDNdJn_apI3UTntmC" width="800px" height="475px" style="border-radius: 10px;"></iframe>
		</div>
			

	</div><!-- wrapper -->

</body>
</html>