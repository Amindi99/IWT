
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
	else if(cvv != "" && !cvvRegex.test(cvv))
	{ 
		alert('Invalid cvv Number!');
		document.getElementById("cvv").focus();
	}
}