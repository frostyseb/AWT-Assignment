
function addTxt(autocompleteItems){
	var suggest = autocompleteItems.getAttribute("data-suggest");
	document.getElementById("myInput").value = suggest;
	
	console.log(suggest);
}
