<?php
	include_once 'config.php';
?>
	
<?php
$fname = $_POST["fname1"];
$lname = $_POST["lname1"];
$address = $_POST["haddress1"];
$email = $_POST["eaddress1"];
$pnum = $_POST["mnumber1"];
$gender = $_POST["gender"];
$dob = $_POST["birth1"];
$EQ = $_POST["eduquali1"];
$OQ = $_POST["otherquali1"];
$password = $_POST["PW"];



$sql = "INSERT INTO regdetails (First_Name,Last_Name,Address,Email,Phone_Number,Gender,DOB,Education_Qulifications,Other_Qulifications,Password) 
VALUES ('$fname','$lname','$address','$email','$pnum','$gender','$dob','$EQ','$OQ','$password')";

if(mysqli_query($conn,$sql)){
	
	header("Location:Employee_registerIF.php");
	
}

else {

	echo "<script> alert( 'Submission Failed')</script>";

}

mysqli_close($conn);  

?>