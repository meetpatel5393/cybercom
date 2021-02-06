var arrayOfObject = [];

function getDataFromLocalStorage(keyName) {
	return JSON.parse(localStorage.getItem(keyName));
}
function setDataIntoLocalStorage(keyName,arrayName) {
	localStorage.setItem(keyName,JSON.stringify(arrayName));
}
function register_admin() {
	/*get all data from from*/
	var username = document.getElementById('username').value.trim().toLowerCase();
	var email = document.getElementById('email').value.trim().toLowerCase();
	var password = document.getElementById('password').value.trim().toLowerCase();
	var confirm_password = document.getElementById('confirm_password').value.trim().toLowerCase();
	var city = document.getElementById('city').value.trim().toLowerCase();
	var state = document.getElementById('state').value.trim().toLowerCase();
	//var terms = get_val('terms');
	var termsDom = document.getElementById('terms');

	if(
		username.length != 0 
		&& email.length != 0 
		&& password.length != 0 
		&& confirm_password.length != 0
		&& city.length != 0 
		&& state.length != 0
		) {

		if(password === confirm_password)
		{
			if(termsDom.checked) {
				var AdminData = {
					name : username,
					email : email ,
					password : password ,
					city : city ,
					state :state
				};
				arrayOfObject = getDataFromLocalStorage('adminData');
				//get all object into array from localstorage
				if(arrayOfObject != null){ //if record is availbale in localstorage
					var userExits = '';
					for (var i = 0; i < arrayOfObject.length; i++) {
						if(arrayOfObject[i]['name'] === username) {
							userExits = true ;
							break;
						} else {
							userExits = false ;
						}
					}
					if(userExits == false) {
						arrayOfObject.push(AdminData);
						setDataIntoLocalStorage('adminData',arrayOfObject);
						alert('Registered Successfully');
						window.location.replace("login.html");
					} else {
						alert('Admin Already Registered');
					}
				}
				else{ //when we store data into localstorage first time
					arrayOfObject.push(AdminData);
					setDataIntoLocalStorage('adminData',arrayOfObject);
					alert('Registered Successfully');
					window.location.replace("login.html");
				}
			} else {
				alert("Please Accept terms & condition");
			}
		} else {
			alert("please enter both password same");
		}
	} else {
		alert('Please enter all value');
	}
}