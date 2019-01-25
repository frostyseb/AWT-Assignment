<?php

$q = $_REQUEST["q"];

$hint = "";



if ($q !== "") {
    $q = strtolower($q);
    $len = strlen($q);
	
	$xml = simplexml_load_file("clubs_societies.xml") or die("Error: Cannot create object");
	
    foreach($xml->club as $name) {
        if (stristr($q, substr($name, 0, $len))) {
            if ($hint === "") {
                $hint = $name;
				echo "<button type='button' onclick='addTxt(this)' data-suggest='" . $hint . "' class='autocompleteItems'>" . $hint . "</button>";
            } 
			else {
				echo "<button type='button' onclick='addTxt(this)' data-suggest='" . $name . "' class='autocompleteItems'>" . $name . "</button>";    
            }
        }
	
    }
}

?>
