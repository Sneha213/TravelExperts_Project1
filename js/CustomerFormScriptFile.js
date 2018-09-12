/**
*This function validates the data from the agents form
*The focus for validation here is on the phone number and email provided
*The required property of the input element is set as a means to validate all other text fields
*Also, a select element is used to ensure a valid input is entered
returns a boolean value.
*/
function validateData(form)
{
	var x;
	for(x = 0; x < form.length; x++)
	{
		if(form[x].type == "text" || form[x].type == "email")
		{
			 if (form[x].name == "CustHomePhone" || form[x].name == "CustBusPhone")
				 {
			
				if(!validatePhoneNumber(form[x].value))
				{
					alert("Phone number format not valid. Please use this format (xxx) xxx-xxxx");
					form[x].focus();

					return false;
				}
            
			}
			else if(form[x].name == "CustPostal")
			{
				if(!validatePostalCode(form[x].value))
				{
					alert("Invalid postal code");
					form[x].focus();
					
					return false;
				}
			}
			else if(form[x].value == "" || form[x].value == " ")
			{
				alert(form[x].name + " is a required value");
				form[x].focus();

				return false;
			}
			else if(form[x].name == "CustEmail")
			{
				
				if(!validateEmail(form[x].value))
				{
					alert("Invalid email address");
					form[x].focus();

					return false;
				}
				if(form[x].value != document.getElementById("confirmEmail").value)
				{
					alert("Email addresses do not match");
					form[x].focus();
					return false;
				}
			}
		}
		else if(form[x].type == "password")
		{
			if(form[x].value == "")
			{
				alert("Password is a required field");
				return false;
			}
			if(form[x].value != document.getElementById("confirmPassword").value)
			{
				alert("Passwords do not match");
				form[x].focus();
				return false;
			}
			
		}
	}
	
	return  confirm("Are you sure you want to submit form?");
}

/**
*This function validates a provided string and returns
* a boolean value indicating whether it is a valid postal code.
* */
function validatePostalCode(postalCode)
{
	var regex = /^[A-Z]\d[A-Z] ?\d[A-Z]\d$/i;
	
	return regex.test(postalCode);
}


/**
*This function validates a 10 digit phone number
without spaces, punctuations, or special characters
*Returns a boolean value
*/
function validatePhoneNumber(phonenumber)
	{
		//https://www.w3resource.com/javascript/form/phone-no-validation.php
		var regexPhone = /^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/;
		
		return regexPhone.test(phonenumber);
	}
	
/**
*This function validates an email address
*Returns a boolean value
*/
function validateEmail(email)
	{
		//http://form.guide/best-practices/validate-email-address-using-javascript.html
		var regexEmail = /^(?:[a-z0-9!#$%&amp;'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&amp;'*+/=?^_`{|}~-]+)*|"(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21\x23-\x5b\x5d-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])*")@(?:(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?|\[(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?|[a-z0-9-]*[a-z0-9]:(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21-\x5a\x53-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])+)\])$/;
		
		return regexEmail.test(email);
	}

function clearForm(form)
{
	var response = confirm("Are you sure you want to reset the form?");

	if(response)
	{
		form.reset();
		
	}

	form[0].focus();
}
