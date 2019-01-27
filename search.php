<html>

<body>

	<?php
	$query = $_POST["clubs"];
	$query = htmlspecialchars($query);
	$query = strtolower($query);
	$len = strlen($query);
	
	$flag = 0;
	
	$xml = simplexml_load_file("clubs_societies.xml") or die("Error: Cannot create object");
	
	foreach($xml->club as $name) {
        if (stristr($query, substr($name, 0, $len))) {
			echo "<a>" . $name . "</a><br>";
			$flag = 1;
		}
	}
	
	if($flag == 0){
		echo "No result.";
	}
	
	?>

</body>

</html>