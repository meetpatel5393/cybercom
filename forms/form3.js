function check_validation(){
	var name = document.getElementById("name").value;
	var email = document.getElementById("email").value;
 	var subject = document.getElementById('subject').value;
 	var message = document.getElementById('message').value;

 	if(
 		name.trim().length == 0
 		|| email.trim().length == 0
 		|| subject.trim().length == 0
 		|| message.trim().length == 0
 	) {
 		alert('Please Fill All The Value');
 		return false;
 	} else {
 		return true;
 	}
}