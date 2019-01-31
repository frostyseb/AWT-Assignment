function validateClub(){
	var name = document.forms["club_form"]["cname"].value;
	var id = document.forms["club_form"]["cid"].value;
		
	if(name == ""){
		alert("Please fill in the club name.");
		return false;
	}
	else if(id == ""){
		alert("Please fill in the club ID.");
		return false;
	}
	else{
		return true;
	}
}