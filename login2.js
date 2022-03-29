var attempt = 3; // gives the user 3 chances to insert the user info

	function validate(){
		/*	var username = document.getElementById("username").value;
		var password = document.getElementById("password").value; 	*/
			if ( username == "Formget" && password == "formget#123"){
			alert ("Login successfully");
			window.location = "BMI_kira.html"; // Local File Location
			return false;
			}
			else{
attempt --; 
alert("You have left "+attempt+" attempt;");
// notification that will tell the user that the 3 times attempts have been used up

	if( attempt == 0){
		document.getElementById("username").disabled = true;
		document.getElementById("password").disabled = true;
		document.getElementById("submit").disabled = true;
		return false;
		}
		}
		}

