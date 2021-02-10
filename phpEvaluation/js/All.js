function getDataFromElement(id) {
	return document.getElementById(id).value.trim().toLowerCase();
}
function setErrorMessage(id,errMsg) {
	document.getElementById(id).innerHTML = errMsg;
}
function checkRegistrationValidation(){

	var prefix = getDataFromElement('prefix');
	var firstName = getDataFromElement('firstName');
	var lastName = getDataFromElement('lastName');
	var email = getDataFromElement('email');
	var mobileNumber = getDataFromElement('mobileNumber');
	var password = getDataFromElement('password');
	var confirmPassword = getDataFromElement('confirmPassword');
	var information = getDataFromElement('information');
	var terms = get_val('terms');


	if(prefix.length == 0 || firstName.length == 0 ||
		lastName.length == 0 || email.length == 0 || mobileNumber.length == 0 || password.length == 0
		|| confirmPassword.length == 0 || information.length == 0) {

		if(prefix.length == 0) {
			setErrorMessage('prefixError','* Please select prefix');
		} else {
			setErrorMessage('prefixError','');
		}
		if(firstName.length == 0) {
			setErrorMessage('firstnameError','* Please enter first name');
		} else {
			setErrorMessage('firstnameError','');
		}
		if(lastName.length == 0) {
			setErrorMessage('lastnameError','* Please enter last name');
		} else {
			setErrorMessage('lastnameError','');
		}
		if(email.length == 0) {
			setErrorMessage('emailError','* Please enter email');
		} else {
			setErrorMessage('emailError','');
		}
		if(mobileNumber.length == 0) {
			setErrorMessage('mobileError','* Please enter phone number');
		} else {
			setErrorMessage('mobileError','');	
		}
		if(password.length == 0) {
			setErrorMessage('passwordError','* Please enter password');
		} else {
			setErrorMessage('passwordError','');
		}
		if(confirmPassword.length == 0) {
			setErrorMessage('confirmPasswordError','* Please enter password again');
		} else {
			setErrorMessage('confirmPasswordError','');
		}
		if(information.length == 0) {
			setErrorMessage('informationError','* Please enter information');
		} else {
			setErrorMessage('informationError','');
		}
		return false;
	} else {

		if(mobileNumber.length != 10) {
			setErrorMessage('mobileError','* Phone number must be 10 digit');
			return false;
		} else {
			setErrorMessage('mobileError','');
			if(password != confirmPassword){
				setErrorMessage('confirmPasswordError','* Please enter both password same');
				return false;
			} else {
				if(terms.length == 0) {
					setErrorMessage('agreeError','* Please select terms');
					return false;
				} else {
					setErrorMessage('agreeError','');
					return true;
				}
			}
		}
	}
}
function get_val(value){
	var return_str = '';
	var elementDom = document.getElementsByName(value);
	for(i = 0; i < elementDom.length; i++) { 
        if(elementDom[i].checked){
        	return_str+=elementDom[i].value+"\n";
    	}
    }
    return return_str;
}
function checkLoginValidation(){
	var email = getDataFromElement('email');
	var password = getDataFromElement('password');	
	if(email.length == 0 || password.length == 0) {
		if(email.length == 0) {
			setErrorMessage('emailError','* Please Enter email');
		} else {
			setErrorMessage('emailError','');
		}
		if(password.length == 0) {
			setErrorMessage('passwordError','* Please enter password');
		} else {
			setErrorMessage('passwordError','');
		}
		return false;
	} else {
		return true;
	}
}
function deletePost(val) {
	xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function(){
		if(this.readyState == 4 && this.status == 200) {
			window.location.replace('./blogPost.php');
		}
	}
	xhttp.open('GET','model/deletPost.php?id='+val,true);
	xhttp.send();
}