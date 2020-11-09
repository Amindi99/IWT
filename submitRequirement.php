<?php
	include_once 'config.php';
?>
	
<?php

$sql="INSERT INTO requirement (First_Name,Last_Name,Email,Registration_Num,Address,Contact_Num,Priority_level,Issue_category,Issue_description,Date) VALUES ('$_POST[fname]','$_POST[lname]','$_POST[email]','$_POST[rnum]','$_POST[addr]','$_POST[cnum]','$_POST[level]','$_POST[select]','$_POST[dis]','$_POST[date]')";
        
	if ($conn->query($sql) === TRUE) {
		echo "<script>alert('Record Added Successfuly!');</script>";
		header("Location:requirementIF.php");
	} else {
		echo "<script>alert('Submission Failed!');</script>";
	}  

?>