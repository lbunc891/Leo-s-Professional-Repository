function init()
{	
	var form = document.querySelector("#accountCreation");
	form.addEventListener('submit', validateInput);
}

function validateInput(event)
{
	var username = document.querySelector("#Username").value;
	var password1 = document.querySelector("#Password1").value;
	var password2 = document.querySelector("#Password2").value;
	var email = document.querySelector("#Email").value;
	var errorDiv = document.getElementById("errorDiv");
	errorDiv.innerHTML = "";
	
	if(username == "")
	{
		errorDiv.innerHTML += "Username cannot be empty<br>";
		event.preventDefault();
	}
	
	if(password1 == "" || password2 == "")
	{
		errorDiv.innerHTML += "Password cannot be empty<br>";
		event.preventDefault();
	}
	
	if(email == "")	
	{
		errorDiv.innerHTML += "Email cannot be empty<br>";
		event.preventDefault();
	}
}

 window.onload = init;