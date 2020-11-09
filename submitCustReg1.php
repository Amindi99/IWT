<?php
	include_once 'config.php';
?>
	
<?php
$fname = $_REQUEST["fname"];
$lname = $_REQUEST["lname"];
$address = $_REQUEST["haddress"];
$email = $_REQUEST["eaddress"];
$pnum = $_REQUEST["mnumber"];
$gender = $_REQUEST["gender"];
$dob = $_REQUEST["birth"];
$password = $_REQUEST["PW"];



$sql = "insert into regdetailscust (User_ID,First_Name,Last_Name,Address,Email,Phone_Number,Gender,DOB,Password) 
values ('','$fname','$lname ','$address','$email','$pnum','$gender','$dob','$password')";

if(mysqli_query($conn,$sql)){
	
	header("Location:Customer_registerIF.php");
	
}

else {

	echo "<script> alert( 'Submission Failed')</script>";

}

mysqli_close($conn);  

?>