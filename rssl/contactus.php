
<?php 
//Linking the configuration file
require ('config.php');

$name = $_POST['name'];
$contact = $_POST['PhoneNumber'];
$message = $_POST['message'];

$sql= "INSERT INTO contactus(Name, Message, contactNo) VALUES ('$name','$message','$contact')";
if ($conn->query($sql) === TRUE) {
    header('location:contact us.html');

} else {
    echo "Error: ". $conn->error;
}

$conn->close();
?>






