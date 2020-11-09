<!DOCTYPE html>
<html>
<head>

        <meta charset="utf-8">
	
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>About Us</title> 
	<link rel="stylesheet" type="text/css" href="styles/style.css">

	<title>Requirement Form</title> 
	
<style>

	input[type=text], select {
	width: 50%;
	padding: 12px 20px;
	margin: 8px 0;
	display: inline-block;
	border: 1px solid #ccc;
	border-radius: 4px;
        box-sizing: border-box;
        }
	  
	input[type=email], select {
	width: 50%;
	padding: 12px 20px;
	margin: 8px 0;
	display: inline-block;
	border: 1px solid #ccc;
	border-radius: 4px;
        box-sizing: border-box;
        } 
	  
	input[type=button] {
	width: 20%;
	color: white;
	font-size:20px;
	padding: 14px 20px;
	font-family:Arial Rounded MT Bold;
	background-color: rgb(105, 105, 105);
	margin: 15px 0;
	border: 2px;
	border-radius: 10px;
        cursor: pointer;
        }
	  
	form{
	font-size:20px;
	font-family:Chaparral Pro;
	color:black;
	background-color:white;
	width: 1200px;
	padding:20px;
	margin: 50x;
        border-radius:25px;
        background-color:rgb(130, 176, 228);
        }
		
	body {
        background-color:white; 
        }	
		
	p{
	font-size:20px;
	font-family:Chaparral Pro;
        color:black;
        padding-left:25px;
        padding-bottom:10px;
        }	

	h1{
	font-size:45px;
	font-family:"AvQest";
        color:#000066;
        }	
		
	img.photo{
	height:300px;
         width:75%;
        }
    
</style>

</head>

        <body>

        <?php
		include 'header.php';
	?>

        <center>
	        <h1>Issue Reporting  </h1>

	        <img class="photo" src="images/issue1.jpg">
	</center>

	<p>Mention all the correct details before submit the requirement form.
        Give your direct contact mobile number and an alternate contact number. And also give your active personal
        email address, toreceive all information by email, mention your correct Registration number.
        <br><br>
        <b> Note:</b> In case contact details are not mentioned clearly the
        form shall not be considered. Mention your permanent address clearly.</p>

        <center>
                <form method ="POST" action="submitRequirement.php">
        
                First name :<br>
                        <input type="text" name="fname" placeholder="First name" required></br></br>
                Last name:<br>
                        <input type="text" name="lname" placeholder="Last name" required></br></br>
                E-mail:<br>
                        <input type="email" name="email" placeholder="abc@gmail.com" required></br></br>
                Registration number:<br>
                        <input type="text" name="rnum" placeholder="TZ0000" required></br></br>
                Address:<br>
                        <input type="text" name="addr" required></br></br>		
                Contact number:<br>
                        <input type="text" name="cnum"></br></br>
                Priority level:<br>		
                        <input type="radio" name="level" value="Urgent">Urgent </br>
                        <input type="radio" name="level" value="Normal">Normal </br>	
                        <input type="radio" name="level" value="Low">Low </br></br>
                Issue category:<br>
                        <input type="radio" name="select" required value="Security and malware">Security and malware </br>
                        <input type="radio" name="select" required value="Internet and Networking">Internet and Networking</br>
                        <input type="radio" name="select"required value="Software and Hardware">Software and Hardware</br>
                        <input type="radio" name="select"required value="Operating systems">Operating systems</br>
                Issue description :<br>
                        <textarea rows="7" name="dis" cols="60"></textarea></br></br>	
                Date:<br>
                        <input type="date" name="date" required></br></br>
                        <center>
                        <a href="online_payment_page.php"> <input type="button" id="submit" value="Submit" ></a>
                        </center>

                 </form>
        </center>
        <br><br>

        <?php
		include 'footer.php';
	?>

	</body>

	</html>
			
			
			
			
			
			
			