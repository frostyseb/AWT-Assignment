function validation(){
	var regExp = /[0-9]/;
	var x = document.forms["searchForm"]["clubs"].value;
	
	if(x == ""){
		alert("Please type in words to search.");
		return false;
	}
	else if(x.match(regExp)){
		alert("Club or Society name does not contain number.");
		return false;
	}
	else if(x.length > 30 || x.length < 0){
		alert("Club or Society name must be between 1 to 30 letters including space.");
		return false;
	}
	else{
		return true;
	}
}