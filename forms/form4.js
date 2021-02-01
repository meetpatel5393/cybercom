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
 	var confrim_password = document.getElementById("confrim_password").value;
 	var agree = get_val('agree');

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
 		|| agree.trim().length == 0
 	) {
 		alert('Please Fill All The Value');
 		return false;
 	} else {
 		if(!password.match(confrim_password)) {
 			alert('Please enter both password same');
 			return false;
 		} else {
 			return true;
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