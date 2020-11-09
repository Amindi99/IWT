<!DOCTYPE html>
<html>
	<head>
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


        input[type=submit] {
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

        p{
	font-size:20px;
	font-family:Chaparral Pro;
        color:black;
        padding-left:25px;
        padding-bottom:10px;
        }	

	</style>	
		<meta charset="utf-8">
	
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>online_payment_page</title> 
	<link rel="stylesheet" type="text/css" href="styles/style.css">
			
		
		
		<!--Scripts-->
        <script type="text/javascript" src="js/myscript.js"></script>
        
	</head>
	<body>
       
    <?php
		include 'header.php';
	?>
        

	             
        
        <section class="section">
            <div class="container">
                <div style="margin-left: 15px;text-align: left;">
                    <label style="margin: 0 auto;font-size: 20px;font-weight: 700;">Online Payment</label> 	    		
                </div>
                <div style="margin-left: 15px;text-align: left;margin-top: 10px;">
                    <div class="push-left">
                    <img src="images/lock.png" alt="" title="" /></div>
                    <div class="push-left">
                    <label style="margin: 0 auto;font-size: 18px;">Your payment is secure and your credit card details will not be shared with others.</label>		    		
                    </div>
                </div> 
            </div>
        </section>
        <section class="section">
            <div class="container">
                <div class="row">
                            <div style="text-align: left;">
                                <img src="images/master_icon.png" alt="" />
                                <img src="images/visa_icon.png" alt="" />
                                <img src="images/paypal_icon.png" alt="" />
                            </div>
                </div>
            </div>
            <center>
            <form method="POST" action="submitpayment.php"> 
            
                            <label for="fname">Card Number</label><span style="color:red">*</span><br>
                            <input  id="ccNumber" type="text" autocomplete="off" name="ccNumber" placeholder="Card Number (ex:xxxx-xxxx-xxxx-xxxx)">	<br><br>
                         
                        
                            <label for="fname">Expiration Date</label><span style="color:red">*</span><br>
                            <input  id="expDate" type="text" autocomplete="off" name="expDate" placeholder="Expiration Date (ex:mm/yy)">	<br><br>
                        
                            <label for="fname">First Name</label><span style="color:red">*</span><br>
                            <input id="fname" type="text" name="fname" placeholder="First Name">	<br><br>
                        
                            <label for="fname">Last Name</label><span style="color:red">*</span><br>
                            <input  id="lname" type="text" name="lname" placeholder="Last Name">	<br><br>
                        
                            <label for="fname">CVV</label><span style="color:red">*</span><br>
                            <input  id="cvv" type="text" autocomplete="off" name="cvv" placeholder="CVV (ex:123)">	<br><br>
                       
                <div class="row">
                    <div class="text-center">
                        <div class="div-button">
                            <a onclick="creditCardSubmitValidation()" class="a-text" >Submit</a>
                        </div>
                        <div class="div-button">
                            <a class="a-text">Cancel</a>
                        </div>
                    </div> 
                </div> 

                <script src="js/payment.js"></script>
            </div>
            </form>
</center>
        </section>
        
                
            <?php
		include 'footer.php';
	?>
	  
    </body>
</html>

