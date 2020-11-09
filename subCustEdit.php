<?php
    include_once 'config.php';
    $id = $_POST["ID"];
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $address = $_POST["haddress"];
    $email = $_POST["eaddress"];
    $mnumber = $_POST["mnumber"];
    $gender = $_POST["gender"];
    $birth = $_POST["birth"];
    $pw = $_POST["PW1"];
	$sql = "UPDATE regdetails SET
            
            First_Name='$fname',
            Last_Name='$lname',
            Address='$address',
            Email='$email',
            Phone_Number='$mnumber',
            Gender='$gender',
            DOB='$birth',
            Password='$pw' WHERE User_ID = $id" ;
    $result = $conn -> query($sql);
    
?>