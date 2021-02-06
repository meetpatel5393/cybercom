var arrayOfObject = [];
var userLoginSession = [];
var allUserLoginSession = [];
var count = 0, count1=0, count2=0;
var months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
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
	if( username.length != 0 
		&& email.length != 0 
		&& password.length != 0 
		&& confirm_password.length != 0
		&& city.length != 0 
		&& state.length != 0
		) {
		if(password === confirm_password) {
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
	var useremail= document.getElementById('email').value.trim().toLowerCase();
	var user_password = document.getElementById('password').value.trim().toLowerCase();

	if(useremail.length != 0 && user_password.length != 0) {
		if(localStorage.getItem("adminData") != null){ //if record is availbale in localstorage
			arrayOfObject = getDataFromLocalStorage("adminData");
			for (var i = 0; i < arrayOfObject.length; i++) {
				if(arrayOfObject[i]['email'] === useremail) {
					//check in admin data.
					if(arrayOfObject[i]['password'] === user_password) {
						alert('Successfully Log-In');
						var adminLoginSessionLog = {
							name : arrayOfObject[i]['name'],
							status : 'LogIn'
						};
						//set admin login session log
						userLoginSession.push(adminLoginSessionLog);
						setDataIntoLocalStorage('AdminLoginSessionLog',userLoginSession);
						window.location.replace("dashboard.html");
					} else {
						alert('Wrong Password');
						window.location.replace("login.html");
					}
					break;
				} 
				//check subuser database
				else {
					if(localStorage.getItem("subUserData") != null){ //if record is availbale in localstorage
						arrayOfObject = getDataFromLocalStorage("subUserData");
						var userExits = '';
						var Uname = '';
						var Upassword = '';
						for (var i = 0; i < arrayOfObject.length; i++) {
							if(arrayOfObject[i]['email'] === useremail) {
								userExits = true ;
								Uname = arrayOfObject[i]['name'];
								Upassword = arrayOfObject[i]['password'];
								break;
							} else {
								userExits = false ;
							}
						}
						if(userExits == true) {
							if(Upassword === user_password) {
								alert('Successfully Log-In');
								var today = new Date();
								var time = today.getHours() + ":" + today.getMinutes() ;
								var date = today.getDate()+'-'+months[(today.getMonth()+1)]+'-'+today.getFullYear();
								var MyLoginSessionLogDetail = {
									name : Uname,
									logInTime : date+' '+time,
									logOutTime : '',
									status : 'LogIn'
								};
								var LoginSessionLog = {
									name : arrayOfObject[i]['name'],
									logInTime : date+' '+time,
									logOutTime : ''
								};
								//set login session log
								if(localStorage.getItem("MyLoginSessionLog") != null) {
									userLoginSession = getDataFromLocalStorage("MyLoginSessionLog");
									userLoginSession[0]['logInTime'] = date+' '+time;
									userLoginSession[0]['status'] = 'LogIn';
									userLoginSession[0]['name'] = Uname;
									setDataIntoLocalStorage('MyLoginSessionLog',userLoginSession);
								} else {
									userLoginSession.push(MyLoginSessionLogDetail);
									setDataIntoLocalStorage('MyLoginSessionLog',userLoginSession);
								}
								//store data into all user session log
								if(localStorage.getItem("userSessionLog") != null){ //if record is availbale in localstorage
									allUserLoginSession = getDataFromLocalStorage("userSessionLog");
									var logExits = '';
									for (var i = 0; i < allUserLoginSession.length; i++) {
										if(allUserLoginSession[i]['name'] === Uname) {
											allUserLoginSession[i]['logInTime'] = date+' '+time;
											setDataIntoLocalStorage('userSessionLog',allUserLoginSession);
											logExits = true;
											break;
										} else {
											logExits = false;
										}
									}
									if(logExits == false) {
										allUserLoginSession.push(LoginSessionLog);
										setDataIntoLocalStorage('userSessionLog',allUserLoginSession);
									}
								}
								else {
									allUserLoginSession.push(LoginSessionLog);
									setDataIntoLocalStorage('userSessionLog',allUserLoginSession);
								}
								window.location.replace("subUser.html");
							} else {
								alert('Wrong Password');
								window.location.replace("login.html");
							}
						} else {
							alert('Please Ask Admin to give you access of this site');
							window.location.replace("login.html");
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
			'<a href="#" id="'+arrayOfObject[i]['email']+'"onclick="editSubUser_data(this.id);">'+'Edit'+'</a>' +
			' <a href="#" id="'+arrayOfObject[i]['email']+'"onclick="deleteSubUser_data(this.id);">'+'Delete'+'</a>';
		}
	}
}
function deleteSubUser_data(val) {
	var subUserEmail = val;
	if(localStorage.getItem("subUserData") != null){ //if record is availbale in localstorage
		arrayOfObject = getDataFromLocalStorage("subUserData");
		for (var i = 0; i < arrayOfObject.length; i++) {
			if(arrayOfObject[i]['email'] === subUserEmail) {
				arrayOfObject.splice(i,1);
				break;
			}
		}
		setDataIntoLocalStorage('subUserData',arrayOfObject);
		window.location.replace("user.html");
	}
}
function editSubUser_data(val) {
	var subUserEmail = val;
	if(localStorage.getItem("subUserData") != null){ //if record is availbale in localstorage
		arrayOfObject = getDataFromLocalStorage("subUserData");
		for (var i = 0; i < arrayOfObject.length; i++) {
			if(arrayOfObject[i]['email'] === subUserEmail) {
				document.getElementById('name').value = arrayOfObject[i]['name'];
				document.getElementById('email').value = arrayOfObject[i]['email'];
				document.getElementById('password').value = arrayOfObject[i]['password'];
				document.getElementById('dob').value = arrayOfObject[i]['dob'];
				break;
			}
		}
		document.getElementById('add_user_btn').innerHTML = 'Update User';
		document.getElementById('add_user_btn').setAttribute("onclick", "updateSubUser_data(this.id)");
		document.getElementById('add_user_btn').setAttribute("id",val);
		document.getElementById('email').setAttribute("readonly","true");
	}
}
function updateSubUser_data(val) {
	var subUserEmail = val;
	var username = document.getElementById('name').value.trim().toLowerCase();
	var password = document.getElementById('password').value.trim().toLowerCase();
	var dob = document.getElementById('dob').value.trim().toLowerCase();
	if(localStorage.getItem("subUserData") != null){ //if record is availbale in localstorage
		arrayOfObject = getDataFromLocalStorage("subUserData");
		for (var i = 0; i < arrayOfObject.length; i++) {
			if(arrayOfObject[i]['email'] === subUserEmail) {
				arrayOfObject[i]['name'] = username;
				arrayOfObject[i]['password'] = password;
				arrayOfObject[i]['dob'] = dob;
				break;
			}
		}
		setDataIntoLocalStorage('subUserData',arrayOfObject);
		window.location.replace("user.html");
	}
}
function loadAdminName(){
	if(localStorage.getItem("adminData") != null){ //if record is availbale in localstorage
		arrayOfObject = getDataFromLocalStorage("adminData");
		document.getElementById('adminName').innerHTML= 'Hello '+arrayOfObject[0]['name'];
	}
}
function getUserSessionsLog() {
	if(localStorage.getItem("userSessionLog") != null){
		arrayOfObject = getDataFromLocalStorage("userSessionLog");
		var userSessionLog_data = document.getElementById('userSessionLog_data');
		for (var i = 0; i < arrayOfObject.length; i++) {
			var dob = new Date(arrayOfObject[i]['dob']);
		    var d = new Date();
		    var age = d.getFullYear() - dob.getFullYear();

			var row = userSessionLog_data.insertRow(i+1);
			var cell1 = row.insertCell(0);
			var cell2 = row.insertCell(1);
			var cell3 = row.insertCell(2);
			cell1.innerHTML = arrayOfObject[i]['name'];
			cell2.innerHTML = arrayOfObject[i]['logInTime'];
			cell3.innerHTML = arrayOfObject[i]['logOutTime'];
		}
	}
}
function getUserCount() {
	var res = '';
	var today = new Date();
	if(localStorage.getItem("subUserData") != null){
		arrayOfObject = getDataFromLocalStorage("subUserData");
		var sub_user_dataDom = document.getElementById('subUser_data');
		for (var i = 0; i < arrayOfObject.length; i++) {
			var dob = new Date(arrayOfObject[i]['dob']);
		    var d = new Date();
		    var age = d.getFullYear() - dob.getFullYear();
			if(age<18) {
				count++;
			} else if(18<age<50) {
				count1++;
			} else if(age>50) {
				count2++;
			}
			if(today.getDate() === dob.getDate() && today.getDate() === dob.getDate()){
				res += 'Today is '+arrayOfObject[i]['name']+' Birthday <br>';
			}
		}
		document.getElementById('uc1').innerHTML = count+' Users';
		document.getElementById('uc2').innerHTML = count1+' Users';
		document.getElementById('uc3').innerHTML = count2+' Users';
		document.getElementById('bdayList').innerHTML = res;
	}
}
function loadUserName() {
	if(localStorage.getItem("MyLoginSessionLog") != null){ //if record is availbale in localstorage
		arrayOfObject = getDataFromLocalStorage("MyLoginSessionLog");
		document.getElementById('subUserName').innerHTML= 'Hello '+arrayOfObject[0]['name'];
	}
}
function showBdayWish() {
	var name = '';
	var today = new Date();
	if(localStorage.getItem("MyLoginSessionLog") != null){ //if record is availbale in localstorage
		arrayOfObject = getDataFromLocalStorage("MyLoginSessionLog");
		name = arrayOfObject[0]['name'];
	}
	if(localStorage.getItem("subUserData") != null){
		arrayOfObject = getDataFromLocalStorage("subUserData");
		for (var i = 0; i < arrayOfObject.length; i++) {
			if(arrayOfObject[i]['name'] === name) {
				var birthDate = new Date(arrayOfObject[i]['dob']);
				if(today.getDate() === birthDate.getDate() && today.getDate() === birthDate.getDate()){
					document.getElementById("subUserBdayWish").innerHTML = "Happy BirthDay "+name;
				}
				break;
			}
		}
	}
}
function logOutSubUser() {
	var today = new Date();
	var time = today.getHours() + ":" + today.getMinutes() ;
	var date = today.getDate()+'-'+months[(today.getMonth()+1)]+'-'+today.getFullYear();
	var email = ''; 
	var name='';
	//update data in personal log
	if(localStorage.getItem("MyLoginSessionLog") != null){
		arrayOfObject = getDataFromLocalStorage("MyLoginSessionLog");
		arrayOfObject[0]['logOutTime'] = date+' '+time;
		arrayOfObject[0]['status'] = 'logout';
		email = arrayOfObject[0]['email'];
		name =  arrayOfObject[0]['name'];
	}
	setDataIntoLocalStorage('MyLoginSessionLog',arrayOfObject);
	if(localStorage.getItem("userSessionLog") != null){
		arrayOfObject = getDataFromLocalStorage("userSessionLog");
		for (var i = 0; i < arrayOfObject.length; i++) {
			if(arrayOfObject[i]['name'] === name) {
				arrayOfObject[i]['logOutTime'] = date+' '+time;
				break;
			}
		}
	}
	setDataIntoLocalStorage('userSessionLog',arrayOfObject);
	window.location.replace('login.html');
}
function logOutAdmin(){
	if(localStorage.getItem("AdminLoginSessionLog") != null){
		arrayOfObject = getDataFromLocalStorage("AdminLoginSessionLog");
		arrayOfObject[0]['status'] = 'logout';
	}
	setDataIntoLocalStorage('AdminLoginSessionLog',arrayOfObject);
	window.location.replace('login.html');
}
function checkStatus(val){
	if(localStorage.getItem(val) != null){
		arrayOfObject = getDataFromLocalStorage(val);
		 if(arrayOfObject[0]['status'] === 'logout') {
		 	window.location.replace('login.html');
		 }
	}
}