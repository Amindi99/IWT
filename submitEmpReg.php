<?php
	include_once 'config.php';
?>
	
<?php

$sql="INSERT INTO regdetails (First_Name,Last_Name,Address,Email,Phone_Number,Gender,DOB,Education_Qualifications,Other_Qualifications,Password) VALUES ('$_POST[fname1]','$_POST[lname1]','$_POST[haddress1]','$_POST[eaddress1]','$_POST[mnumber1]','$_POST[gender]','$_POST[birth1]','$_POST[eduquali1]','$_POST[otherquali1]','$_POST[PW]')";
        
	if ($conn->query($sql) === TRUE) {
		echo "<script>alert('Record Added Successfuly!');</script>";
		header("Location:Employee_registerIF.php");
	} else {
		echo "<script>alert('Submission Failed!');</script>";
	}  

?>