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
    }

    if ( document.updateProfileForm.txtTo.value == "" ) {
        document.getElementById('txtTo').className = "error-input";
        document.getElementById('tyearMsg').className += " show-error";
        document.getElementById('tyearMsg').innerHTML = "Please enter the to year.";
        return false;
    }

    if ( document.updateProfileForm.txtareaDesc.value == "" ) {
        document.getElementById('txtareaDesc').className = "error-input";
        document.getElementById('descMsg').className += " show-error";
        document.getElementById('descMsg').innerHTML = "Please enter the description.";
        return false;
    }
}
