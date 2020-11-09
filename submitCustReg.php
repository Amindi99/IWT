<?php
	include_once 'config.php';
?>
	
<?php

$sql="INSERT INTO regdetailscust (First_Name,Last_Name,Address,Email,Phone_Number,Gender,DOB,Password) VALUES ('$_POST[fname]','$_POST[lname]','$_POST[haddress]','$_POST[eaddress]','$_POST[mnumber]','$_POST[gender]','$_POST[birth]','$_POST[PW1]')";
        
	if ($conn->query($sql) === TRUE) {
		echo "<script>alert('Record Added Successfuly!');</script>";
		header("Location:Customer_registerIF.php");
	} else {
		echo "<script>alert('Submission Failed!');</script>";
	}  

?>