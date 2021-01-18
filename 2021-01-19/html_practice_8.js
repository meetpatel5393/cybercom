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