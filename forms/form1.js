function check_validation(){
	var name = document.getElementById("name").value;
	var password = document.getElementById("password").value;
	var address = document.getElementById("address").value;
 	var game = get_val('game[]');
 	var gender = get_val('gender');
 	var age = document.getElementById('age').value;
 	var file = document.getElementById('file').value;

 	if(
 		name.trim().length == 0
 		|| password.trim().length == 0
 		|| address.trim().length == 0
 		|| game.trim().length == 0
 		|| gender.trim().length == 0
 		|| age.trim().length == 0
 		|| file.trim().length == 0
 	) {
 		alert('Please Fill All The Value');
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