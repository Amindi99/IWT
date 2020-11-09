function checkPassword() {
		var a = document.getElementById("pwd1").value;
		var b = document.getElementById("pwd2").value;
			if (a == b){
				alert("password matched")
				}
				else{
					alert("password mismatched")
					}
				}
						

function enableButton() {
	if(document.getElementById("cbox").checked){
			document.getElementById("sbtn").disabled = false;
			}
			else
				document.getElementById("sbtn").disabled = true;
				}
									