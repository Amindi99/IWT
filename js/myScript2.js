function checkPassword() {
		var c = document.getElementById("pword").value;
		var d = document.getElementById("pwords").value;
			if (c == d){
				alert("password matched")
				}
				else{
					alert("password mismatched")
					}
				}
						

function enableButton() {
	if(document.getElementById("cbox1").checked){
			document.getElementById("sbtn1").disabled = false;
			}
			else
				document.getElementById("sbtn1").disabled = true;
				}
									