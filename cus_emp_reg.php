<!DOCTYPE html>
<html>
<head>

	<title> Customer or Employee Registration</title>

	<style>
	
	input[type=button] {
	  width: 50%;
	  background-color:rgb(130, 176, 228);
	  color: white;
	  font-size:20px;
	  padding: 14px 20px;
	  font-family:Arial Rounded MT Bold; 
	  margin:15px;
	  border: none;
	  border-radius: 10px;
	  cursor: pointer;
	}	

	body {
 	  background-image:"images/wallpaper.jpg";
	}	
		</style>

	<meta charset="utf-8">
	
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Home</title> 
	<link rel="stylesheet" type="text/css" href="styles/style.css">

	</head>
	
<body>
	
	<?php
		include 'header.php';
	?>

<center>
       <form>
		   <br><br><br><br>
			<a href="Customer_register.php"><input type="button" id="customer" value="Customer Registration" ></a>
			<br><br>
			<a href="Employee_register.php"><input type="button" id="Employee" value="Employee Registration" ></a>
       </form>
    </center>

	<br><br><br><br>
	
	<?php
		include 'footer.php';
	?>

	</body>
</html>