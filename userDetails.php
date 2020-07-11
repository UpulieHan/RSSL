<!DOCTYPE html>
<html>
<head>
	<title>User Profile</title>
	<link rel="stylesheet" type="text/css" href="css/theme.css">
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
		

	</div><!-- wrapper -->

</body>
</html>





	<!-- variable that changes according to the div displayed currently-->	
	<?php
		$status = "";
	?>

	<!-- javascript  -->
	<script>

			// <form id="technicianlist">
			// 	<input type="number" maxlength="4" name="technicianNo">
			// 	<button onclick="showUser;" >Search employeeID</button>
			// </form>

			// <br>
			// <div id="txtHint"><b>Person info will be listed here.</b></div>
	function showUser() {
	  var techID = prompt("Enter technician ID : ");
	  if (techID=="") {
	    document.getElementById("txtHint").innerHTML="";
	    return;
	  }
		<? php
		$sql = " SELECT * FROM technician WHERE 'employeeID'="techID" ";
		$result = mysqli_query($conn,$sql);
		echo "<table>
				<tr>
					<th>Firstname</th>
					<th>Lastname</th>
					<th>DOB</th>
					<th>Address</th>
					<th>Salary</th>
				</tr>";
		while($row = mysqli_fetch_array($result)) {
		    echo "<tr>";
		    echo "<td>" . $row['fname'] . "</td>";
		    echo "<td>" . $row['lname'] . "</td>";
		    echo "<td>" . $row['dob'] . "</td>";
		    echo "<td>" . $row['address'] . "</td>";
		    echo "<td>" . $row['salary'] . "</td>";
		    echo "</tr>";
		}
		echo "</table>";
		mysqli_close($con);
		?>
	}
