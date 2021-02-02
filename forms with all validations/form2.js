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
function check_validation(){
	
	var name = document.getElementById("name").value;
	var password = document.getElementById("password").value;
	var gender = get_val('gender');
	var address = document.getElementById("address").value;
 	var game = get_val('game[]');
 	var marital_status = get_val('marital_status');
 	var agree = get_val('agree');
 	var month = document.getElementById('dob_month').value;
 	var day = document.getElementById('dob_day').value;
 	var year = document.getElementById('dob_year').value;

 	var nameDom = document.getElementById('name_error');
 	var passwordDom = document.getElementById('password_error');
 	var genderDom = document.getElementById('gender_error');
 	var addressDom = document.getElementById('address_error');
 	var dobDom = document.getElementById('dob_error');
 	var gameDom = document.getElementById('game_error');
 	var marital_status_Dom = document.getElementById('marital_status_error');
 	var agreeDom = document.getElementById('agree_error');

 	if(
 		name.trim().length == 0
 		|| password.trim().length == 0
 		|| address.trim().length == 0
 		|| game.trim().length == 0
 		|| gender.trim().length == 0
 		|| marital_status.trim().length == 0
 		|| month.trim().length == 0
 		|| day.trim().length == 0
 		|| year.trim().length == 0
 	) {
 		if(name.trim().length == 0)
	 	 	nameDom.innerHTML = '* Please Enter Name';
	 	else
	 		nameDom.innerHTML = '';
	 	
	 	if(password.trim().length == 0)
	 	 	passwordDom.innerHTML = '* Please Enter Password';
	 	else
	 		passwordDom.innerHTML = '';
	 	
	 	if(gender.trim().length == 0)
	 	 	genderDom.innerHTML = '* Please Select Gender';
	 	else
	 		genderDom.innerHTML = '';
	 
	 	if(address.trim().length == 0)
	 	 	addressDom.innerHTML = '* Please Enter Address';
	 	else
	 		addressDom.innerHTML = '';
	 	
	 	if(day.trim().length == 0 || month.trim().length == 0 || year.trim().length == 0)
	 	 	dobDom.innerHTML = '* Select Valid D.O.B';
	 	else
	 		dobDom.innerHTML = '';

	 	if(game.trim().length == 0)
	 	 	gameDom.innerHTML = '* Select At Least 1 Game';
	 	else
	 		gameDom.innerHTML = '';

	 	if(marital_status.trim().length == 0)
	 	 	marital_status_Dom.innerHTML = '* Select Marital Status';
	 	else
	 		marital_status_Dom.innerHTML = '';

 		return false;
 	} else {
 		nameDom.innerHTML = '';
 		passwordDom.innerHTML = '';
 		genderDom.innerHTML = '';
 		addressDom.innerHTML = '';
 		dobDom.innerHTML = '';
 		gameDom.innerHTML = '';
 		marital_status_Dom.innerHTML = '';

 		if(agree.trim().length == 0) {
 			agreeDom.innerHTML = '* Accept agrement first';
 			return false;
 		} else {
 			agreeDom.innerHTML = '';
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