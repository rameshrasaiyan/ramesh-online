function validateUpdateForm() {

    if ( document.updateProfileForm.txtTitle.value == "" ) {
        document.getElementById('txtTitle').className = "error-input";
        document.getElementById('titleMsg').className += " show-error";
        document.getElementById('titleMsg').innerHTML = "Please enter the title";
        return false;
    }

    if ( document.updateProfileForm.txtCompany.value == "" ) {
        document.getElementById('txtCompany').className = "error-input";
        document.getElementById('companyMsg').className += " show-error";
        document.getElementById('companyMsg').innerHTML = "Please enter the company name.";
        return false;
    }


    if ( document.updateProfileForm.txtFrom.value == "" ) {
        document.getElementById('txtFrom').className = "error-input";
        document.getElementById('fyearMsg').className += " show-error";
        document.getElementById('fyearMsg').innerHTML = "Please enter the from year.";
        return false;
    } else if ( !validYear(document.getElementById('txtFrom') )) {
        document.getElementById('txtFrom').className = "error-input";
        document.getElementById('fyearMsg').className += " show-error";
        document.getElementById('fyearMsg').innerHTML = "Enter the year in YYYY format.";
        return false;
    }

    if ( document.updateProfileForm.txtTo.value == "" ) {
        document.getElementById('txtTo').className = "error-input";
        document.getElementById('tyearMsg').className += " show-error";
        document.getElementById('tyearMsg').innerHTML = "Please enter the to year.";
        return false;
    } else if ( !validYear(document.getElementById('txtTo') )) {
        document.getElementById('txtTo').className = "error-input";
        document.getElementById('tyearMsg').className += " show-error";
        document.getElementById('tyearMsg').innerHTML = "Enter the year in YYYY format";
        return false;
    }

    if ( document.updateProfileForm.txtareaDesc.value == "" ) {
        document.getElementById('txtareaDesc').className = "error-input";
        document.getElementById('descMsg').className += " show-error";
        document.getElementById('descMsg').innerHTML = "Please enter the description.";
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

// Valid Year RegEx.
function validYear(elem) {
    var check = /^\d{4}$/;
    if ((elem.value.match(check))) {
        return true;
    }
    else {
        return false;
    }
}