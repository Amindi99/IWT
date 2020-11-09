<?php
	include_once 'config.php';
?>

<?php
	
	$recordId = $_GET['Id'];
	$sql = "DELETE   FROM regdetails where User_ID = $recordId";
	$result = $conn -> query($sql);
	
			
if(mysqli_query($conn,$sql)){
	
	header("Location:Employee_registerIF.php");
	
}

else {

	echo "<script> alert( 'Submission Failed')</script>";

}

mysqli_close($conn); 

?>