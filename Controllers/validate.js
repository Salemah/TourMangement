// Defining a function to display error message
function printError(elemId, hintMsg) {
    document.getElementById(elemId).innerHTML = hintMsg;
}

// Defining a function to validate form
function form() {
    // Retrieving the values of form elements

    var username = document.signupform.username.value;
    var email = document.signupform.email.value;
    var number = document.signupform.number.value;
    var address = document.signupform.address.value;
    var userpassword = document.signupform.userpassword.value;
    var confirmpassword = document.signupform.confirmpassword.value;

    // Defining error variables with a default value
    var usernameerror = emailerror = userpassworderror = confirmpassworderror = true;

    // Validate username
    if (username == "") {
        printError("usernameerror", "Enter your Username");
    } else {
        printError("usernameerror", "");
        usernameerror = false;
    }

    // Validate email
    if (email == "") {
        printError("emailerror", "Enter your Email");
    } else {
        printError("emailerror", "");
        emailerror = false;
    }

     // Validate number
     if (number == "") {
        printError("numbererror", "Enter your Mobile number");
    } else {
        printError("numbererror", "");
        numbererrorr = false;
    }

  // Validate address
  if (address == "") {
    printError("addresserror", "Enter your Address");
} else {
    printError("addresserror", "");
    addresserrorr = false;
}


    // Validate userpassword
    if (userpassword == "") {
        printError("userpassworderror", "Enter your Password");
    } else {
        printError("userpassworderror", "");
        userpassworderror = false;
    }

    // Validate confirmpassword
    if (confirmpassword == "") {
        printError("confirmpassworderror", "Confirm your Password");
    } else {
        printError("confirmpassworderror", "");
        confirmpassworderror = false;
    }

    // Prevent the form from being submitted if there are any errors
    if (
        (usernameerror ||
            emailerror ||
            userpassworderror ||
            confirmpassworderror ||
            addresserror ||
            numbererror) == true
    ) {
        return false;
    } else {
        return true;
    }
}
