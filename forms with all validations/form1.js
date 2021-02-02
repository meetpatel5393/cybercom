function check_validation(){
	var name = document.getElementById("name").value;
	var password = document.getElementById("password").value;
	var address = document.getElementById("address").value;
 	var game = get_val('game[]');
 	var gender = get_val('gender');
 	var age = document.getElementById('age').value;
 	var file = document.getElementById('file').value;

 	var nameDom = document.getElementById('name_error');
 	var passwordDom = document.getElementById('password_error');
 	var addressDom = document.getElementById('address_error');
 	var gameDom = document.getElementById('game_error');
 	var genderDom = document.getElementById('gender_error');
 	var ageDom = document.getElementById('age_error');
 	var fileDom = document.getElementById('file_error');

 	if(
 		name.trim().length == 0
 		|| password.trim().length == 0
 		|| address.trim().length == 0
 		|| game.trim().length == 0
 		|| gender.trim().length == 0
 		|| age.trim().length == 0
 		|| file.trim().length == 0
 	) {
	 	if(name.trim().length == 0)
	 	 	nameDom.innerHTML = '* Please Enter Name';
	 	else
	 		nameDom.innerHTML = '';
	 	
	 	if(password.trim().length == 0)
	 	 	passwordDom.innerHTML = '* Please Enter Password';
	 	else
	 		passwordDom.innerHTML = '';

	 	if(address.trim().length == 0)
	 	 	addressDom.innerHTML = '* Please Enter Address';
	 	else
	 		addressDom.innerHTML = '';

	 	if(game.trim().length == 0)
	 	 	gameDom.innerHTML = '* Select At Least 1 Game';
	 	else
	 		gameDom.innerHTML = '';
	 	
	 	if(gender.trim().length == 0)
	 	 	genderDom.innerHTML = '* Please Select Gender';
	 	else
	 		genderDom.innerHTML = '';
	 
	 	if(age.trim().length == 0)
	 	 	ageDom.innerHTML = '* Select Age Type';
	 	else
	 		ageDom.innerHTML = '';

	 	if(file.trim().length == 0)
	 	 	fileDom.innerHTML = '* Select File';
	 	else
	 		fileDom.innerHTML = '';

 		return false;
 	} else {
 		return true;
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