var John = { //object for John detail
	fullname: 'John',
	mass: 60 ,
	height: 1.8288 ,
	bmi: 0
}
var Mark = { //object for mark detail
	fullname: 'Mark',
	mass: 58 ,
	height: 1.7288 ,
	bmi: 0
}
function calculateBMI(mass , height) { //calculate BMI
	var bmi = mass / ( height * height );
	return bmi;
}
//call function and store BMI in respected object
John.bmi = calculateBMI(John.mass , John.height);
Mark.bmi = calculateBMI(Mark.mass , Mark.height);

var result = '';
function show_result() { //show result on web page
	if(John.bmi > Mark.bmi)
		result += 'John have Highest BMI : ' + John.bmi ;
	else if(John.bmi < Mark.bmi)
		result += 'Mark have Highest BMI : ' + Mark.bmi ;
	else
		result += 'Both have Same BMI : ' + John.bmi ;

	document.getElementById("result").innerHTML = result;
}