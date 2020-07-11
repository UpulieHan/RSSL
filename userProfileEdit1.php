<?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$exists = 0;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
    $exists = 1;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
?>



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
