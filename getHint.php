
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
				echo "<button data-suggest='" . $hint . "' class='hintButton'>" . $hint . "</button>";
            } 
			else {
				echo "<button data-suggest='" . $name . "' class='hintButton'>" . $name . "</button>";
                
            }
        }
	
    }
}

?>