function check_validation(){
	var email = document.getElementById("email").value;
	var password = document.getElementById("password").value;
 	if(
 		email.trim().length == 0
 		|| password.trim().length == 0
 	) {
 		alert('Please Fill All The Value');
 		return false;
 	} else {
 		return true;
 	}
}