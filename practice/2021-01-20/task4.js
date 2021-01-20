var array_of_obj = [];//global array to store all data

function store_data(){
	var name1 = document.getElementById('name').value;
	var email1 = document.getElementById('email').value;
	var dob1 = document.getElementById('dob').value;
	var ob1 = {
		name:name1,
		email:email1,
		dob:dob1
	};

	//get all object into array from localstorage
	if(localStorage.getItem("record") != null){ //if record is availbale in localstorage
		array_of_obj = JSON.parse(localStorage.getItem("record"));
		array_of_obj.push(ob1);
		localStorage.setItem('record',JSON.stringify(array_of_obj));
	}
	else{//when we store data into localstorage first time
		array_of_obj.push(ob1);
		localStorage.setItem('record',JSON.stringify(array_of_obj));
	}	
}

function show_data(){
	var mainnode = document.getElementById('res');
	array_of_obj = JSON.parse(localStorage.getItem("record"));
	for(c in array_of_obj){	
		var node = document.createElement("tr");//create one row

		var td = document.createElement('td');
		td.innerHTML = array_of_obj[c]['name'];
		var td2 = document.createElement('td');
		td2.innerHTML = array_of_obj[c]['email'];
		var td1 = document.createElement('td');
		td1.innerHTML = array_of_obj[c]['dob'];
		
		node.appendChild(td);
		node.appendChild(td2);
		node.appendChild(td1);
		mainnode.appendChild(node);
	}
}