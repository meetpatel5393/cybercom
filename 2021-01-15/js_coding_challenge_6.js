function fibonacci_series(){
	var arr = [0,1] , result = '' ;
	for (var i = 0; i < 20; i++) {
		if(i == 0)
			result += '0 ';
		else if(i == 1)
			result += '1 ';
		else
		{
			var temp = arr[0]+arr[1]; 
			result += temp+' ';
			arr[0] = arr[1];
			arr[1] = (temp);
		}
	}
	document.getElementById('res').innerHTML = result;
}