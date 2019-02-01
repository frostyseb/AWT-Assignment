function validateClubMem(){
	var sid = document.forms["club_member"]["student_id"].value;
	var clist = document.getElementById("club_id1");
	var cid = clist.options[clist.selectedIndex].value;
	
	if(sid == ""){
		alert("Please enter the Student ID.");
		return false;
	}
	else if(cid == 0){
		alert("Please choose a club.");
		return false;
	}
	else{
		return true;
	}
}