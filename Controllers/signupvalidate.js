// Defining a function to display error message
function printError(elemId, hintMsg) {
    document.getElementById(elemId).innerHTML = hintMsg;
}

// Defining a function to validate form
function form() {
    // Retrieving the values of form elements

    var username = document.signupform.username.value;
    var email = document.signupform.email.value;
    var userpassword = document.signupform.userpassword.value;
    var confirmpassword = document.signupform.confirmpassword.value;

    // Defining error variables with a default value
    var usernameerror = emailerror = userpassworderror = confirmpassworderror = true;

    // Validate username
    if (username == "") {
        printError("usernameerror", "শালারপুত Username দে");
    } else {
        printError("usernameerror", "");
        usernameerror = false;
    }

    // Validate email
    if (email == "") {
        printError("emailerror", "শালারপুত Email দে");
    } else {
        printError("emailerror", "");
        emailerror = false;
    }

    // Validate userpassword
    if (userpassword == "") {
        printError("userpassworderror", "PASSWORD দে বেয়াদব কোথাকার");
    } else {
        printError("userpassworderror", "");
        userpassworderror = false;
    }

    // Validate confirmpassword
    if (confirmpassword == "") {
        printError("confirmpassworderror", "PASSWORD দে বেয়াদব কোথাকার");
    } else {
        printError("confirmpassworderror", "");
        confirmpassworderror = false;
    }

    // Prevent the form from being submitted if there are any errors
    if (
        (usernameerror ||
            emailerror ||
            userpassworderror ||
            confirmpassworderror) == true
    ) {
        return false;
    } else {
        return true;
    }
}
