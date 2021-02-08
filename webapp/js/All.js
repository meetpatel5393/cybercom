function getDataFromElement(id) {
	return document.getElementById(id).value.trim().toLowerCase();
}
function setErrorMessage(id,errMsg) {
	document.getElementById(id).innerHTML = errMsg;
}
function createContactValidation(){
	var name = getDataFromElement('name');
	var email = getDataFromElement('email');
	var phoneNumber = getDataFromElement('phoneNumber');
	var title = getDataFromElement('title');
	var created = getDataFromElement('created');

	if(name.length == 0 || email.length == 0 ||
		phoneNumber.length == 0 || title.length == 0 || created.length == 0) {
		if(name.length == 0) {
			setErrorMessage('nameError','* Please enter name');
		} else {
			setErrorMessage('nameError','');
		}
		if(email.length == 0) {
			setErrorMessage('emailError','* Please enter email');
		} else {
			setErrorMessage('emailError','');
		}
		if(phoneNumber.length == 0) {
			setErrorMessage('phoneNumberError','* Please enter phone number');
		} else {
			setErrorMessage('phoneNumberError','');	
		}
		if(title.length == 0) {
			setErrorMessage('titleError','* Please enter title');
		} else {
			setErrorMessage('titleError','');
		}
		if(created.length == 0) {
			setErrorMessage('createdError','* Please enter created time');
		} else {
			setErrorMessage('createdError','');
		}
		return false;
	} else {
		setErrorMessage('nameError','');
		setErrorMessage('emailError','');
		setErrorMessage('phoneNumberError','');	
		setErrorMessage('createdError','');
		setErrorMessage('titleError','');
		if(phoneNumber.length != 10) {
			setErrorMessage('phoneNumberError','* Phone number must be 10 digit');
			return false;
		} else {
			setErrorMessage('phoneNumberError','');
			return true;
		}
	}
}
function deleteContact(val) {
	xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function(){
		if(this.readyState == 4 && this.status == 200) {
			if(this.responseText === 'Data deleted successfully') {
				window.location.replace('contacts.php');
			}
		}
	}
	xhttp.open('GET','model/deleteContact.php?id='+val,true);
	xhttp.send();
}