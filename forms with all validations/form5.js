function check_validation(){
	var email = document.getElementById("email").value;
	var password = document.getElementById("password").value;

	var email_errorDom = document.getElementById('email_error');
	var password_errorDom = document.getElementById("password_error");

 	if( email.trim().length == 0 || password.trim().length == 0) {
 		
 		if(email.trim().length == 0)
 			email_errorDom.innerHTML = 'Please Enter Email';
 		else
 			email_errorDom.innerHTML = '';
 		
 		if(password.trim().length == 0)
 			password_errorDom.innerHTML = 'Please Enter Password';
 		else
 			password_errorDom.innerHTML = '';

 		return false;
 	} else {
 		email_errorDom.innerHTML = '';
 		password_errorDom.innerHTML = '';
 		return true;
 	}
}