// Defining a function to display error message
function printError(elemId, hintMsg) {
    document.getElementById(elemId).innerHTML = hintMsg;
}

// Defining a function to validate form
function loginvalidateForm() {
    // Retrieving the values of form elements

    var email = document.myform.email.value;
    var password = document.myform.password.value;

    // Defining error variables with a default value
    var emailerror = passworderror = true;

    // Validate email
    if (email == "") {
        printError("emailerror", " Email ");
    } else {
        printError("emailerror", "");
        emailerror = false;
    }

    // Validate password
    if (password == "") {
        printError("passworderror", "PASSWORD ");
    } else {
        printError("passworderror", "");
        passworderror = false;
    }

    // Prevent the form from being submitted if there are any errors
    if ((emailerror || passworderror) == true) {
        return false;
    } else {
        return true;
    }
}
