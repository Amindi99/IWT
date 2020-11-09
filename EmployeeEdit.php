<?php
	include_once 'config.php';
	$recordId = $_GET['Id'];
	$sql = "SELECT * FROM regdetails where $recordId";
	$result = $conn -> query($sql);
	
			
	
?>
<html>
	<head>
	<link rel="stylesheet" type="text/css" href="styles/style_Employee.css">
	<link rel="stylesheet" type="text/css" href="styles/style.css">	

	<style>
body{
background-color:#DBF3FA;

}
input[type=text], input[type=phone],input[type=password],input[type=email]{
  width: 100%;
  padding: 12px 20px;
  display: inline-block;
  border: 2px solid ;
  border-radius: 4px;
  box-sizing: border-box;
  background-color: #f8f8f8;

}
textarea {
  width: 100%;
  height: 150px;
  padding: 12px 20px;
  box-sizing: border-box;
  border: 2px solid ;
  border-radius: 4px;
  background-color: #f8f8f8;
  resize: none;
}



</style>
<script src ="js/myScript2.js"></script>
	</head>
	<body>
	<?php
		include 'header.php';
	?>

<div class ="formData1">

<form  method = "POST" action ="subEmpEdit.php" onsubmit ="return checkPassword ()">

<center><h3>_____________________Update your Employee Details____________________<h3></center>
<hr/><br/>
<?php
$row = mysqli_fetch_array($result);
?>
<input type= "text" name = "ID" value = <?php echo $row['User_ID']?>>
 <h3><li>First Name :
<input type ="text" name ="fname1" placeholder ="<?php echo $row['First_Name']?>" required><br/><br/></h3>

<h3><li>Last Name:
<input type ="text" name ="lname1" placeholder ="<?php echo $row['Last_Name']?>"required><br/><br/></h3>

<h3><li>Address :<br/>
<textarea rows="5" cols="30" name ="haddress1" required><?php echo $row['Address']?></textarea><br/><br/></h3>

<h3><li>E-mail:      
<input type = "email" name ="eaddress1"  placeholder ="<?php echo $row['Email']?>" required><br/><br/></h3>

<h3><li>Phone Number :
<input type ="phone" name="mnumber1" placeholder ="<?php echo $row['Phone_Number']?>" pattern ="[0-9a-zA-Z]*{5,10} " required ><br/><br/></h3>

<h3><li>Gender :
<input type ="radio" name ="gender" value = "Male">Male
<input type ="radio" name ="gender" value = "Female">Female<br/><br/></h3>

<h3><li>Choose your DOB :
<input type ="date" name ="birth1" required><br/><br/></h3>

<h3><li>Educational Qualifications :
<textarea rows="5" cols="30" name ="eduquali1" required><?php echo $row['Education_Qualifications']?></textarea><br/><br/></h3>

<h3><li>Other Qualifications :
<textarea rows="5" cols="30" name ="otherquali1" required><?php echo $row['Other_Qualifications']?></textarea><br/><br/></h3>

<h3><li>Password :
<input type ="password" id ="pword" pattern =".{6,}" required><br/><br/></h3>

<h3><li>Re-enter Password :
<input type ="password" name = "PW" id ="pwords"  pattern =".{6,}" required><br/><br/></h3>

<h3><input type ="checkbox" id ="cbox1" onclick ="enableButton ()">Accept private policy & terms<br/><br/></h3>

<h3><input type ="submit" id ="sbtn1" name ="sbtn" disabled></h3>

</ul>

</form>
<?php
		include 'footer.php';
?>
</body>
</html>