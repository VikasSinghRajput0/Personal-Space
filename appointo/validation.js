
 
// Defining a function to display error message
function printError(elemId, hintMsg) {
    document.getElementById(elemId).innerHTML = hintMsg;
}

// Defining a function to validate form 
function validateForm() {
    // Retrieving the values of form elements 
	
	
    var fname = document.getElementById('firstname').value;
   
    var lname = document.getElementById('lastname').value;
   var email = document.getElementById('email').value;
   var password = document.getElementById('pwd').value;
   var confirmpassword = document.getElementById('confirmpwd').value;
    var phone = document.getElementById('phoneno').value;
   
	// Defining error variables with a default value
    var fnameErr = lnameErr = emailErr = phoneErr = pwdErr = confirmpwdErr = true;
 
    // Validate name
    if(fname == "") 
     {
        printError("fnameErr", "Please enter your name");
     
    } 
    else 
     {
        var regex = /^[a-zA-Z\s]+$/;                
        if(regex.test(fname) === false)
		{
            printError("fnameErr", "Please enter a valid name");
        } else 
         	{
            printError("fnameErr", "");
            fnameErr = false;
        }
    }
   

     // Validate name
    if(lname == "") 
     {
        printError("lnameErr", "Please enter your name");
     
    } 
    else 
     {
        var regex = /^[a-zA-Z\s]+$/;                
        if(regex.test(lname) === false)
		{
            printError("lnameErr", "Please enter a valid name");
        } else 
         	{
            printError("lnameErr", "");
            lnameErr = false;
        }
    }


 // Validate email address
    if(email == "") {
        printError("emailErr", "Please enter a valid email address");
    } else {
        // Regular expression for basic email validation
        var regex = /^\S+@\S+\.\S+$/;
        if(regex.test(email) === false) {
            printError("emailErr", "Please enter a valid email address");
        } else{
            printError("emailErr", "");
            emailErr = false;
        }
    }
    
    // Validate mobile number
    if(phone == "") {
        printError("phoneErr", "Please enter your mobile number");
    } else {
        var regex = /^[1-9]\d{9}$/;
        if(regex.test(phone) === false) {
            printError("phoneErr", "Please enter a valid 10 digit mobile number");
        } else{
            printError("phoneErr", "");
            phoneErr = false;
        }
    }


 // Validate password
   if(password == "") {
        printError("pwdErr", "Please enter your password");
    } else {
        // Regular expression for basic email validation
       var regex =  /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{7,15}$/;
        if(regex.test(password) === false) {
            printError("pwdErr", "Please enter a valid password use symbol atleast");
        } else{
            printError("pwdErr", "");
           pwdErr = false;
        }
    }

    if(confirmpassword != password) {
        printError("confirmpwdErr", "password not matched");
    }  else{
            printError("confirmpwdErr", "");
           confirmpwdErr = false;
        }
    



    
    if((fnameErr || lnameErr  || pwdErr || confirmpwdErr||emailErr) == true) {
    	console.log(fnameErr);
    	console.log(lnameErr);
    	console.log(pwdErr);
    	console.log(confirmpwdErr);
        return false;
    }
    
    
};

function loginValidate()
{
	
	var email = document.getElementById('email').value;
	 var password = document.getElementById('pwd').value;
	 var emailErr = pwdErr= true;
	if(email == "") {
        printError("emailErr", "Please enter your password");
    } else {
        // Regular expression for basic email validation
        var regex = /^\S+@\S+\.\S+$/;
        if(regex.test(email) === false) {
            printError("emailErr", "Please enter a valid email address");
        } else{
            printError("emailErr", "");
            emailErr = false;
        }
    }
	
	// Validate password
		if(password == "") {
        printError("pwdErr", "Please enter your password");
    } else {
        // Regular expression for basic email validation
       var regex =  /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{7,15}$/;
        if(regex.test(password) === false) {
            printError("pwdErr", "Please enter a valid password use symbol atleast");
        } else{
            printError("pwdErr", "");
           pwdErr = false;
        }
    }
   
	
	
	if( emailErr || pwdErr  == true) {
        return false;
    }
	
};
 
function pinValidate()
{
	
	var pincode = document.getElementById('pincode').value;
	var state= document.getElementById('state').value;
	var city = document.getElementById('city').value;
	var address = document.getElementById('local_address').value;
	var type = document.getElementById('address').value;
	var select = document.getElementById('select').value;
	
	var pinErr  = stateErr =cityErr = addErr = typeErr =  selectErr = true;
	
	// state validation 
	if(state == "") {
	        printError("stateErr", "Please choose your state");
	      
	    } 
	 else{
		 
		 printError("stateErr", "");
		 stateErr= false;
     }
	
	 
	 // city validation
	 if(city == "") {
	        printError("cityErr", "Please enter your city");
	       
	    }  else{
			 
			 printError("cityErr", "");
			 cityErr= false;
	     }
	 
//	address validation
	if(address == "") {
	        printError("addErr", "Please enter your address");
	       
	    } 
 else{
		 
		 printError("addErr", "");
		 addErr= false;
     }
	
	 //pincode validation
    if(pincode == "") {
        printError("pinErr", "Please enter your pin number");
       
    } 
       else {
        var regex = /^[0-9]\d{5}$/;
        if(regex.test(pincode) === false) {
            printError("pinErr", "Please enter a valid 6 digit pin number");
            alert("hy");
        } 
        else{
            printError("pinErr", "");
            pinErr= false;
        }
    }
    
 // type validation 
	if(type == "") {
	        printError("typeErr", "Please choose your address type");
	      
	    } 
	 else{
		 
		 printError("typeErr", "");
		 typeErr = false;
     }
	 // specialisation  validation 
	if(select == "") {
	        printError("selectErr", "Please choose your specialization type");
	      
	    } 
	 else{
		 
		 printError("selectErr", "");
		 selectErr = false;
     }
	

    if(pinErr || stateErr ||cityErr || addErr || typeErr || selectErr == true) {
        return false;
    }

   
};

