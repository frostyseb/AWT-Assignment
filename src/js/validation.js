function validation(){
	var regExp = /^(?=.*\d)$/;
	var text = document.form.clubs.value;
	
	if(text == ""){
		alert("Search box cannot be empty.");
		return false;
	}
	else if(text.value.match(regExp)){
		alert("Club or Society name does not contain number.");
		return false;
	}
	else{
		return true;
	}
}