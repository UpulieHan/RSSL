<html>
<body>
<?php 
//Linking the configuration file
require ('config.php');

if(isset($_POST ["btnSubmit"] ) ){
	$fname = $_POST["fname"];
	$lname = $_POST["lname"]; 
	$dob = $_POST["dob"];
	$nic = $_POST["nic"];
	$address = $_POST["address"];
	$salary = 35000;
	$performance = "No comments yet";
	$administratorID = 1010;
}
$sql= " INSERT INTO technician(employeeID, NIC, salary, address, DOB, fname, lname, performance, administratorID) VALUES (NULL,'$nic','$salary','$address','$dob','$fname','$lname','$performance','$administratorID') ";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: ". $conn->error;
}

$conn->close();
?>

</body>
</html>





