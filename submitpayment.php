<?php
	include_once 'config.php';
?>
	
<?php

$sql="INSERT INTO payment (Card_Number,Exp_Date,First_Name,Last_Name,CVV) VALUES ('$_POST[ccNumber]','$_POST[expDate]','$_POST[fname]','$_POST[lname]','$_POST[cvv]')";
        
	if ($conn->query($sql) === TRUE) {
		echo "<script>alert('Record Added Successfuly!');</script>";
		header("Location:PaymentIF.php");
	} else {
		echo "<script>alert('Submission Failed!');</script>";
	}  

?>