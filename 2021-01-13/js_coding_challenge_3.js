var bill = [124 , 48 , 	268]; //bill amount array.

function calculateTip(bill_ammount){ //function for calculate tip for all bill amount.
	if(bill_ammount < 50)
		return bill_ammount*0.2;
	else if (bill_ammount >= 50 && bill_ammount <= 200)
		return bill_ammount*0.15;
	else if(bill_ammount > 200)
		return bill_ammount*0.1;
}

var tip = new Array(3); //define tip array.
var total_ammount = new Array(3); //define total ammount array.
for (var i = 0; i < bill.length; i++){ //this for loop for calculate tip for each and every bill amount store inside bill array.
	tip[i] = Math.floor(calculateTip(bill[i]));
	total_ammount[i] = Math.floor(tip[i] + bill[i]);
}

var result = ''; //to store final result which show in web page
function show_result(){
	for (var i = 0; i < bill.length; i++) {
		result += 'Tips for bill amount $' + bill[i] + ' is : $' + tip[i] + '<br>Total Payable Amount Is : $' + total_ammount[i] + '<br><br>';
	}
	document.getElementById('result').innerHTML = result;
}