function validateMemList(){
	var clublist = document.getElementById("club_id2");
	var club = clublist.options[clublist.selectedIndex].value;
	
	if(club == 0){
		alert("Please choose a club.");
		return false;
	}
}