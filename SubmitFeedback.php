<?php
	include_once 'config.php';
?>
	
<?php

$sql="INSERT INTO feedback (Feedback1,Feedback2,Feedback3,Feedback4,Feedback5,Feedback6) VALUES ('$_POST[rating1]','$_POST[rating2]','$_POST[rating3]','$_POST[rating4]','$_POST[rating5]','$_POST[rating6]')";
        
	if ($conn->query($sql) === TRUE) {
		echo "<script>alert('Record Added Successfuly!');</script>";
		header("Location:FeedbackIF.php");
	} else {
		echo "<script>alert('Submission Failed!');</script>";
	}  

?>