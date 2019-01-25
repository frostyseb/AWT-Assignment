function addTxt(autocompleteItems){
	var suggest = autocompleteItems.getAttribute("data-suggest");
	document.getElementById("myInput").value = suggest;
	
	document.getElementById("hintText").innerHTML = "";
}


function displayHint(str) {
	if (str.length == 0) { 
		document.getElementById("hintText").innerHTML = "";
		return;
	} 
	else {
		var xmlhttp = new XMLHttpRequest();
		xmlhttp.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200) {
				document.getElementById("hintText").innerHTML = this.responseText;
			}
		};
		xmlhttp.open("GET", "getHint.php?q=" + str, true);
		xmlhttp.send();
	}
}





