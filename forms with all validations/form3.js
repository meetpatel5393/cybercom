function check_validation()
{
	var name = document.getElementById("name").value;
	var email = document.getElementById("email").value;
 	var subject = document.getElementById("subject").value;
 	var message = document.getElementById("message").value;

 	var nameDom = document.getElementById("name_err");
 	var emailDom = document.getElementById("email_err");
 	var subjectDom = document.getElementById("subject_err");
 	var messageDom = document.getElementById("message_err");

 	if(
 		name.trim().length == 0
 		|| email.trim().length == 0
 		|| subject.trim().length == 0
 		|| message.trim().length == 0
 	) {
 		if(name.trim().length == 0)
	 	 	nameDom.innerHTML = 'Please Enter Name';
	 	else
	 	 	nameDom.innerHTML = '';

	 	if(email.trim().length == 0)
	 		emailDom.innerHTML = 'Please Enter Email';
	 	else
	 		emailDom.innerHTML = '';
	 	
	 	if(subject.trim().length == 0)
	 		subjectDom.innerHTML = 'Please Enter Subject';
	 	else
	 		subjectDom.innerHTML = '';

	 	if(message.trim().length == 0)
	 		messageDom.innerHTML = 'Please Enter Message';
	 	else
	 		messageDom.innerHTML = '';

 		return false;
 	} else {
 		nameDom.innerHTML = '';
 		emailDom.innerHTML = '';
 		subjectDom.innerHTML = '';
 		messageDom.innerHTML = '';
 		return true;
 	}
}