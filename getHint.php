
<?php

$club[] = "Music Club";
$club[] = "Debate Club";
$club[] = "Care Club";
$club[] = "Innovation Club";
$club[] = "Photography Club";
$club[] = "Biotech Club";
$club[] = "International Students Club";
$club[] = "Human Resource Club";
$club[] = "Student Representative Council";
$club[] = "Pharmacy Students Society";
$club[] = "Hindu Society";
$club[] = "Christian Society";
$club[] = "Sikh Society";
$club[] = "Chinese Society";
$club[] = "Muslim Society";
$club[] = "International Commerce Club";
$club[] = "Cricket Club";
$club[] = "Badminton Club";
$club[] = "Futsal & Football Club";
$club[] = "Basketball Club";
$club[] = "Gamers Club";
$club[] = "Indoor Club";
$club[] = "Outdoor Club";

$q = $_REQUEST["q"];

$hint = "";

if ($q !== "") {
    $q = strtolower($q);
    $len=strlen($q);
    foreach($club as $name) {
        if (stristr($q, substr($name, 0, $len))) {
            if ($hint === "") {
                $hint = $name;
				echo "<button onclick='addTxt(this)' data-suggest='" . $hint . "' class='hintButton'>" . $hint . "</button>";
            } 
			else {
				echo "<button onclick='addTxt(this)' data-suggest='" . $name . "' class='hintButton'>" . $name . "</button>";
                
            }
        }
		
    }
}



?>