function searchData(val) {
	xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function(){
		if(this.readyState == 4 && this.status == 200) {
			document.getElementById('result').innerHTML = this.responseText;
		}
	}
	xhttp.open('GET','autoSuggest.php?val='+val,true);
	xhttp.send();

	
	//POST METHOD
	/*text = 'text='+val;
	xhttp.open('POST','autoSuggest.php',true);
	xhttp.setRequestHeader('Content-type','application/x-www-form-urlencoded');
	xhttp.send(text);*/
}