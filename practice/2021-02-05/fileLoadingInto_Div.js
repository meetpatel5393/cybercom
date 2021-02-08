function loadFile(Destination,fileName){
	xmlHttpRequest = new XMLHttpRequest();
	xmlHttpRequest.onreadystatechange = function() {
		if(this.readyState == 4 && this.status == 200) {
			document.getElementById(Destination).innerHTML = this.responseText;
		}
	};
	xmlHttpRequest.open('GET',fileName,true);
	xmlHttpRequest.send();
}