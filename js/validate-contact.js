function validateContactForm() {

    if ( document.contactForm.fullname.value == "" || document.contactForm.fullname.value.length < 3) {
        document.getElementById('fullname').className = "error-input";
        document.getElementById('nameMsg').className += " show-error";
        document.getElementById('nameMsg').innerHTML = "Please enter the name with minimum three letters";
        return false;
    }

    if ( document.getElementById('email').value == "" ) {
        document.getElementById('email').className = "error-input";
        document.getElementById('emailMsg').className += " show-error";
        document.getElementById('emailMsg').innerHTML = "Please enter the email address.";
        return false;
    } else if ( !validateEmail(document.getElementById('email').value) ) {
        document.getElementById('email').className = "error-input";
        document.getElementById('emailMsg').className += " show-error";
        document.getElementById('emailMsg').innerHTML = "Please enter the correct email ID.";
        return false;
    }

    if ( document.contactForm.txtSubject.value == "" || document.contactForm.txtSubject.value.length < 3) {
        document.getElementById('txtSubject').className = "error-input";
        document.getElementById('subMsg').className += " show-error";
        document.getElementById('subMsg').innerHTML = "Please enter the subject with minimum three letters";
        return false;
    }

    if ( document.contactForm.txtMessage.value == "" || document.contactForm.txtMessage.value.length < 3) {
        document.getElementById('txtMessage').className = "error-input";
        document.getElementById('msgMsg').className += " show-error";
        document.getElementById('msgMsg').innerHTML = "Please enter the message with minimum three letters";
        return false;
    }
}


// Removing the error classes and styles from on focus.
function removeError(id, targetClassName, errMsg) {
    var targetInput = id;
    var targetInputClass = targetClassName;
    var targetErrMsg = errMsg;
    document.getElementById(targetInput).className = targetInputClass;
    document.getElementById(targetErrMsg).className = "error";
}

// Email RegEx validation.
function validateEmail(email) {
    var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
}