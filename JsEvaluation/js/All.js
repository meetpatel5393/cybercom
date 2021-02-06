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
				//get all object into array from localstorage
				if(localStorage.getItem("adminData") != null){ //if record is availbale in localstorage
					alert('Admin Already Registered');
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
function login_user(){
	var username = document.getElementById('username').value.trim().toLowerCase();
	var user_password = document.getElementById('password').value.trim().toLowerCase();

	if(username.length != 0 && user_password.length != 0) {
		if(localStorage.getItem("adminData") != null){ //if record is availbale in localstorage
			arrayOfObject = getDataFromLocalStorage("adminData");
			for (var i = 0; i < arrayOfObject.length; i++) {
				if(arrayOfObject[i]['name'] === username) {
					if(arrayOfObject[i]['password'] === user_password) {
						alert('Successfully Log-In');
						window.location.replace("dashboard.html");
					} else {
						alert('Wrong Password');
						window.location.replace("login.html");
					}
					break;
				} else {
					//check subuser database
					if(localStorage.getItem("subUserData") != null){ //if record is availbale in localstorage
						arrayOfObject = getDataFromLocalStorage("subUserData");
						for (var i = 0; i < arrayOfObject.length; i++) {
							if(arrayOfObject[i]['name'] === username) {
								if(arrayOfObject[i]['password'] === user_password) {
									alert('Successfully Log-In');
									//window.location.replace("dashboard.html");
								} else {
									alert('Wrong Password');
									window.location.replace("login.html");
								}
								break;
							}
						}
					}
					break;
				}
			}
		}
	} else {
		alert('Please enter all value');
	}	
}

function addSubUser(){
	var username = document.getElementById('name').value.trim().toLowerCase();
	var email = document.getElementById('email').value.trim().toLowerCase();
	var password = document.getElementById('password').value.trim().toLowerCase();
	var dob = document.getElementById('dob').value.trim().toLowerCase();
	if(
		username.length != 0 
		&& email.length != 0 
		&& password.length != 0 
		&& dob.length != 0) {

		var SubUserData = {
			name : username,
			email : email ,
			password : password ,
			dob : dob
		};
		//get all object into array from localstorage
		if(localStorage.getItem("subUserData") != null){ //if record is availbale in localstorage
			arrayOfObject = getDataFromLocalStorage("subUserData");
			var userExits = '';
			for (var i = 0; i < arrayOfObject.length; i++) {
				if(arrayOfObject[i]['email'] === email) {
					userExits = true ;
					break;
				} else {
					userExits = false ;
				}
			}
			if(userExits == false) {
				arrayOfObject.push(SubUserData);
				setDataIntoLocalStorage('subUserData',arrayOfObject);
				alert('Successfully Entered');
				window.location.replace("user.html");
			} else {
				alert('User Already Exists');
			}
		}
		else { //when we store data into localstorage first time
			arrayOfObject.push(SubUserData);
			setDataIntoLocalStorage('subUserData',arrayOfObject);
			alert('Successfully Entered');
			window.location.replace("user.html");
		}
	} 
	else {
		alert('Please enter all value');
	}
}
function getSubUser_data(){
	if(localStorage.getItem("subUserData") != null){
		arrayOfObject = getDataFromLocalStorage("subUserData");
		var sub_user_dataDom = document.getElementById('subUser_data');
		for (var i = 0; i < arrayOfObject.length; i++) {
		
			var dob = new Date(arrayOfObject[i]['dob']);
		    var d = new Date();
		    var age = d.getFullYear() - dob.getFullYear();
		     
			var row = sub_user_dataDom.insertRow(i+1);
			var cell1 = row.insertCell(0);
			var cell2 = row.insertCell(1);
			var cell3 = row.insertCell(2);
			var cell4 = row.insertCell(3);
			var cell5 = row.insertCell(4);
			var cell6 = row.insertCell(5);
			cell1.innerHTML = arrayOfObject[i]['name'];
			cell2.innerHTML = arrayOfObject[i]['email'];
			cell3.innerHTML = arrayOfObject[i]['password'];
			cell4.innerHTML = arrayOfObject[i]['dob'];
			cell5.innerHTML = age;
			cell6.innerHTML = 
			'<a href="#" id="'+arrayOfObject[i]['name']+'"onclick="edit_subuser_data(this.id);">'+'Edit'+'</a>' +
			' <a href="#" id="'+arrayOfObject[i]['name']+'"onclick="deleteSubUser_data(this.id);">'+'Delete'+'</a>';
		}
	}
}
// function deleteSubUser_data(val) {
	
// }
