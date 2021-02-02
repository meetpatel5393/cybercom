function check_validation(){
	var first_name = document.getElementById("fname").value;
	var last_name = document.getElementById("lname").value;
	var month = document.getElementById('dob_month').value;
 	var day = document.getElementById('dob_day').value;
 	var year = document.getElementById('dob_year').value;
 	var gender = get_val('gender');
 	var country = document.getElementById("country").value;
 	var email = document.getElementById("email").value;
 	var phone_number = document.getElementById("number").value;
 	var password = document.getElementById("password").value;
 	var confirm_password = document.getElementById("confirm_password").value;
 	var agree = get_val('agree');

 	var first_nameDom = document.getElementById('firstname_error');
 	var last_nameDom = document.getElementById('lastname_error');
 	var dobDom = document.getElementById('dob_error');
 	var genderDom = document.getElementById('gender_error');
 	var countryDom = document.getElementById('country_error');
 	var emailDom = document.getElementById('email_error');
 	var numberDom = document.getElementById('number_error');
 	var passwordDom = document.getElementById('password_error');
 	var confirmpasswordDom = document.getElementById('confirm_password_error');
 	var agreeDom = document.getElementById('agree_error');

 	if(
 		first_name.trim().length == 0
 		|| last_name.trim().length == 0
 		|| month.trim().length == 0
 		|| day.trim().length == 0
 		|| year.trim().length == 0
 		|| gender.trim().length == 0
 		|| country.trim().length == 0
 		|| email.trim().length == 0
 		|| phone_number.trim().length == 0
 		|| password.trim().length == 0
 		|| confrim_password.trim().length == 0
 	) {
 		
 		if(first_name.trim().length == 0)
	 	 	first_nameDom.innerHTML = '* Please Enter First Name';
	 	else
	 		first_nameDom.innerHTML = '';

	 	if(last_name.trim().length == 0)
	 	 	last_nameDom.innerHTML = '* Please Enter Last Name';
	 	else
	 		last_nameDom.innerHTML = '';

	 	if(day.trim().length == 0 || month.trim().length == 0 || year.trim().length == 0)
	 	 	dobDom.innerHTML = '* Select Valid D.O.B';
	 	else
	 		dobDom.innerHTML = '';

	 	if(gender.trim().length == 0)
	 	 	genderDom.innerHTML = '* Please Select Gender';
	 	else
	 		genderDom.innerHTML = '';

	 	if(country.trim().length == 0)
	 	 	countryDom.innerHTML = '* Please Select Country';
	 	else
	 		countryDom.innerHTML = '';

	 	if(email.trim().length == 0)
	 	 	emailDom.innerHTML = '* Please Enter Email';
	 	else
	 		emailDom.innerHTML = '';
	 	
	 	if(phone_number.trim().length == 0)
	 	 	numberDom.innerHTML = '* Please Enter Number';
	 	else
	 		numberDom.innerHTML = '';

	 	if(password.trim().length == 0)
	 	 	passwordDom.innerHTML = '* Please Enter Password';
	 	else
	 		passwordDom.innerHTML = '';

	 	if(confirm_password.trim().length == 0)
	 	 	confirmpasswordDom.innerHTML = '* Please Enter Password Here Also';
	 	else
	 		confirmpasswordDom.innerHTML = '';
	 	
 		return false;
 	} else {
 		first_nameDom.innerHTML= last_nameDom.innerHTML= dobDom.innerHTML= genderDom.innerHTML= 
 		countryDom.innerHTML= emailDom.innerHTML= numberDom.innerHTML= passwordDom.innerHTML= 
 		confirmpasswordDom.innerHTML= '';

 		if(!password.match(confrim_password)) {
 			confirmpasswordDom.innerHTML = '* Please enter both password same';
 			return false;
 		} 
 		else {
 			if(agree.trim().length == 0) {
	 			agreeDom.innerHTML = '* Accept agrement first';
	 			return false;
	 		} else {
	 			agreeDom.innerHTML = '';
	 			return true;
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
function get_data(){
	var d = new Date();
	var current_year = d.getFullYear();
	var month = ["January", "February", "March", "April", "May", "June",
    "July", "August", "September", "October", "November", "December"];

	var monthDom = document.getElementById('dob_month');
	var dayDom = document.getElementById('dob_day');
	var yearDom = document.getElementById('dob_year');

	for (var i = 0; i < 12; i++) { //create opetion for month dropdown
		var node = document.createElement("option");
		node.value = month[i];
		node.innerHTML = month[i];
		monthDom.appendChild(node);
	}
	for (var i = 1; i <= 31; i++) { //create opetion for day dropdown
		var node = document.createElement("option");
		node.value = i;
		node.innerHTML = i;
		dayDom.appendChild(node);
	}
	for (var i = 1990; i < current_year; i++) { //create dropdown for year dropdown
		var node = document.createElement("option");
		node.value = i;
		node.innerHTML = i;
		yearDom.appendChild(node);
	}	
}