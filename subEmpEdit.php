<?php
    include_once 'config.php';
    $id = $_POST["ID"];
    $fname = $_POST["fname1"];
    $lname = $_POST["lname1"];
    $address = $_POST["haddress1"];
    $email = $_POST["eaddress1"];
    $mnumber = $_POST["mnumber1"];
    $gender = $_POST["gender"];
    $birth = $_POST["birth1"];
    $eq = $_POST["eduquali1"];
    $oq = $_POST["otherquali1"];
    $pw = $_POST["PW"];
	$sql = "UPDATE regdetails SET
            
            First_Name='$fname',
            Last_Name='$lname',
            Address='$address',
            Email='$email',
            Phone_Number='$mnumber',
            Gender='$gender',
            DOB='$birth',
            Education_Qualifications='$eq',
            Other_Qualifications='$oq',
            Password='$pw' WHERE User_ID = $id" ;
    $result = $conn -> query($sql);
    
?>