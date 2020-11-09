/*Erandi*/

function checkPassword (){
	var a = document.getElementById("pwd1").value;
	var b = document.getElementById("pwd2").value;
		if (a == b){
			alert ("Password mathched")
		}
		else{
			alert("Password mismatched")
		}
}


function enableButton (){
	if(document.getElementById ("cbox").checked){
			document.getElementById("sbtn").disabled = false;
			}
			else
				document.getElementById("sbtn").disabled =true;
}
/*Kanchila*/

function loginvalidation()
{
	if( document.getElementById("logUN").value == "admin" && document.getElementById("logPW").value == "pwadmin123" )
	{
		alert("login successful ! ");
		window.location.assign("UserProfile_AD.html");
	}

	else if( document.getElementById("logUN").value == "softsp" && document.getElementById("logPW").value == "pwsoftsp123" )
	{
		alert("login successful ! ");
		window.location.assign("UserProfile_SP.html");
	}

	else
	{
		alert("invalid login credentials !");
		window.location.reload();
	}
}


function resetform()
{
	window.location.reload();
}


/*Amindi*/

	
	 function Password(){
 var a =document.getElementById("password").value;
 var b =document.getElementById("password").value;
 if(a==b){
	alert("Matched");
	}
else{
	alert("Not matched");
	}
}
/*Rashmi*/


function res_register()
{
	alert("Registered Successfully.");
	return true;
}

function enableButton(){
	if(document.getElementById("box").checked){
	
        document.getElementById("botton").disabled=false;
	}
	else
		document.getElementById("botton").disabled=true;
	
}	

/*Anjana*/

function creditCardSubmitValidation()
{ 
	var ccNumber = document.getElementById("ccNumber").value;
	var expDate = document.getElementById("expDate").value;
	var fname = document.getElementById("fname").value;
	var lname = document.getElementById("lname").value;
	var cvv = document.getElementById("cvv").value;
	
	var ccRegex = new RegExp("^[0-9]{16}$"); 
	var cvvRegex = new RegExp("^[0-9]{3}$"); 	
	
	if(ccNumber == "")
	{ 
		document.getElementById("ccNumber").focus();
	}
	else if(ccNumber != "" && !ccRegex.test(ccNumber))
	{ 
		alert('Invalid Credit Card Number!');
		document.getElementById("ccNumber").focus();
	}
	else if(expDate == "")
	{ 
		document.getElementById("expDate").focus();
	}
	else if(expDate != "" && !expDateValidation(expDate))
	{ 
		alert('Invalid expiration date!');
		document.getElementById("expDate").focus();
	}
	else if(fname == "")
	{ 
		document.getElementById("fname").focus();
	}
	else if(lname == "")
	{ 
		document.getElementById("lname").focus();
	}
	else if(cvv == "")
	{ 
		document.getElementById("cvv").focus();
	}
	else if(cvv != "" && !ccRegex.test(cvvRegex))
	{ 
		alert('Invalid cvv Number!');
		document.getElementById("cvv").focus();
	}
}
function expDateValidation(expDate)
{
	debugger;
	var date = expDate.split("/");	 
	
	if(date[0] != null && date[1] != null)
	{
		if(!isNaN(date[0])&& date[0].length == 2 && !isNaN(date[1]) && date[1].length == 2)
		{
			if(parseInt(date[0]) > 0 && parseInt(date[0]) < 13 && parseInt(date[1]) > 0 && parseInt(date[1]) <= 99)
			{
				return true;
			}
		}
		else
		{
			return false;
		}
	}
	else
	{
		return false
	}
}