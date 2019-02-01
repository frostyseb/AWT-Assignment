function validateClub(){
	var name = document.forms["club_form"]["cname"].value;
	var id = document.forms["club_form"]["cid"].value;
	var regexp = /(QIUPC)\d{3}/g;
		
	if(name == ""){
		alert("Please fill in the club name.");
		return false;
	}
	else if(id == ""){
		alert("Please fill in the club ID.");
		return false;
	}
	else if(!(id.match(regexp))){
		alert("Please fill in the club ID with QIUPC followed by three numbers.");
		return false;
	}
	else{
		return true;
	}
}