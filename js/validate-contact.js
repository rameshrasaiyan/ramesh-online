function validateContactForm() {

    if ( document.contactForm.fullname.value == "" ) {
        document.getElementById('fullname').className = "error-input";
        document.getElementById('nameMsg').className += " show-error";
        document.getElementById('nameMsg').innerHTML = "Please enter the name";
        return false;
    }
}