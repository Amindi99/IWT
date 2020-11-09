<?php
	include_once 'config.php';
?>

<?php
	
	$recordId = $_GET['Id'];
	$sql = "DELETE   FROM regdetailscust where User_ID = $recordId";
	$result = $conn -> query($sql);
	
			
if(mysqli_query($conn,$sql)){
	
	header("Location:Customer_registerIF.php");
	
}

else {

	echo "<script> alert('Submission Failed')</script>";

}

mysqli_close($conn); 

?>