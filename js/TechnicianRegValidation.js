function validateForm(){
	var name= document.forms["technicianForm"]["name"].value;
	var nic= document.forms["technicianForm"]["nic"].value;
	var tel=document.forms["technicianForm"]["tel"].value;
	var address=document.forms["technicianForm"]["address"].value;
	var email=document.forms["technicianForm"]["email"].value;
	var desc=document.forms["technicianForm"]["desc"].value;
	var quali=document.forms["technicianForm"]["quali"].value;
	var exp=document.forms["technicianForm"]["exp"].value;
	
	if(name=="" && nic=="" && tel=="" && address=="" && email=="" && desc=="" && quali==""){
		alert("Please fill out the data fields before continuing");
		return false;
	}
}