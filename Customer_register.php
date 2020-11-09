<DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
	
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<title>Employee Registration Form</title>

<link rel="stylesheet" type="text/css" href="styles/style_Employee.css">
<link rel="stylesheet" type="text/css" href="styles/style.css">
<center>





<style>

body{
background-color:#DBF3FA;
}


textarea {
  width: 100%;
  height: 150px;
  padding: 12px 20px;
  box-sizing: border-box;
  border: 2px solid #ccc;
  border-radius: 4px;
  background-color: #f8f8f8;
  resize: none;
}

input[type=text], input[type=phone],input[type=password],input[type=email]{
  width: 100%;
  padding: 12px 20px;
  display: inline-block;
  border: 2px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  background-color: #f8f8f8;
}
input[type=submit]{

  background-color:#014666;
  border: none;
  color: white;
  padding: 16px 32px;
  text-decoration: none;
  margin: 4px 2px;
  cursor: pointer
  border-radius:16px;
}


h3{

font-family:calibri;
color:#014666;
font-size:21px;

}
h1{
font-family:cursive;
color:black;
font-size:35px;


}



</style>
<script src ="js/myScript_Customer.js"></script>
</center>
</head>
<body>
    <?php
		include 'header.php';
	?>
<div class ="formData">
<form  method = "POST" action = "submitCustReg.php" onsubmit ="return checkPassword ()" >


<center><h3>_____________________Compelete the form below to sign up for our customer services____________________<h3></center>
<hr/><br/>
 <h3><li>First Name :
<input type ="text" name ="fname" placeholder ="first name" required><br/><br/></h3>

<h3><li>Last Name :
<input type ="text" name ="lname" placeholder ="last name"required><br/><br/></h3>

<h3><li>Address :<br/>
<textarea rows="5" cols="30" name ="haddress" required></textarea><br/><br/></h3>
<h3><li>E-mail :      
<input type = "email" name ="eaddress"  placeholder ="myname@example.com" pattern = "[a-zA-Z0-9_%+-]+@[a-zA-Z]+\.[a-z]{2,3}" ><br/><br/></h3>
<h3><li>Phone Number :
<input type ="phone" name ="mnumber" placeholder ="0123456789" pattern ="[0-9a-zA-Z]*{5,10} " required ><br/><br/></h3>
<h3><li>Gender :
<input type ="radio" name ="gender" value="Male">Male
<input type ="radio" name ="gender" value="Female">Female<br/><br/></h3>
<h3><li>Choose your DOB :
<input type ="date" name ="birth" required><br/><br/></h3>
<h3><li>Password :
<input type ="password" id ="pwd1" pattern =".{6,}" required><br/><br/></h3>
<h3><li>Re-enter Password :
<input type ="password" name = "PW1" id ="pwd2"  pattern =".{6,}" required><br/><br/></h3>

<h3><input type ="checkbox" id ="cbox" onclick ="enableButton ()">Accept private policy & terms<br/><br/></h3>

<h3><input type ="submit" id ="sbtn" disabled></h3>

</ul>
<hr/>
</form>
</div>


</fieldset>
  <?php
		include 'footer.php';
	?>

</body>
</html>
