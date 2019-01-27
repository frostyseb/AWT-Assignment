<html>

<head>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	
	<title>Search Results</title>
	
	<!--Bootstrap js-->
	<?php include 'includes/bootstrapH.inc.php'; ?>
	
	<!--Google font style-->
	<link href="https://fonts.googleapis.com/css?family=Alegreya|Exo" rel="stylesheet">
	
	<!--CSS Stylesheets-->
	<link rel="stylesheet" href="src/css/search_page.css" type="text/css">

</head>

<?php include 'simpleNav.php';?>

<body>
	<br><h1 class='resultTitle'>Search Results</h1><br>
	
	<?php
	
	
	$query = $_POST["clubs"];
	$query = htmlspecialchars($query);
	$query = strtolower($query);
	$len = strlen($query);
	
	$flag = 0;
	
	$xml = simplexml_load_file("clubs_societies.xml") or die("Error: Cannot create object");
	
	foreach($xml->club as $name) {
		if (stristr($query, substr($name, 0, $len))) {
			echo "<div class='result'><a href='#'>" . $name . "</a></div><br><br>";
			$flag = 1;
		}
	}
	
	if($flag == 0){
		echo "<div class='result'>No Result</div>";
	}
	
	?>

	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script>
		$(document).ready(function(){
			$(".result").fadeIn(1500);
		});
	</script>
	
</body>

</html>