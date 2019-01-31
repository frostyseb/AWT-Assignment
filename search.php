<html>

<head>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	
	<title>Search Results</title>
	
	<!--Bootstrap js-->
	<?php include 'includes/bootstrapH.inc.php'; ?>
	
	<!--Title Bar Icon-->
	<link rel="icon" type="image/ico" href="src/assets/quest_logo.png">
	
	<!--Google font style-->
	<link href="https://fonts.googleapis.com/css?family=Alegreya|Exo|KoHo" rel="stylesheet">
	
	<!--CSS Stylesheets-->
	<link rel="stylesheet" href="src/css/search_page.css" type="text/css">

</head>

<?php include 'simpleNav.php';?>

<body>
	<h1 class='resultTitle'>Search Results</h1><br>
	<h4 class="resultTitleDescp">Click on your desired link to navigate to the related page</h4>
	
	<?php
	
	
	$query = $_POST["clubs"];
	$query = htmlspecialchars($query);
	$query = strtolower($query);
	$len = strlen($query);
	
	$flag = 0;
	$count = 0;
	
	$xml = simplexml_load_file("clubs_societies.xml") or die("Error: Cannot create object");
	
	echo "<br>";
	
	foreach($xml->club as $name) {
		if (stristr($query, substr($name, 0, $len))) {
			if ($name == 'Music Club') {
				echo "<div class='result'><a href='clubs2.php '>" . $name . "</a></div><br>";
				$flag = 1;
				$count++;
			}
			if ($name == 'Debate Club') {
				echo "<div class='result'><a href='clubs2.php '>" . $name . "</a></div><br>";
				$flag = 1;
				$count++;
			}
			if ($name == 'Q-Care Club') {
				echo "<div class='result'><a href='clubs2.php '>" . $name . "</a></div><br>";
				$flag = 1;
				$count++;
			}
			if ($name == 'Innovation Club') {
				echo "<div class='result'><a href='clubs2.php '>" . $name . "</a></div><br>";
				$flag = 1;
				$count++;
			}
			if ($name == 'Photography Club') {
				echo "<div class='result'><a href='clubs2.php '>" . $name . "</a></div><br>";
				$flag = 1;
				$count++;
			}
			if ($name == 'Biotech Club') {
				echo "<div class='result'><a href='clubs2.php '>" . $name . "</a></div><br>";
				$flag = 1;
				$count++;
			}
			if ($name == 'International Students Club') {
				echo "<div class='result'><a href='clubs2.php '>" . $name . "</a></div><br>";
				$flag = 1;
				$count++;
			}
			if ($name == 'Human Resource Club') {
				echo "<div class='result'><a href='clubs2.php '>" . $name . "</a></div><br>";
				$flag = 1;
				$count++;
			}
			if ($name == 'Student Representative Council') {
				echo "<div class='result'><a href='clubs2.php '>" . $name . "</a></div><br>";
				$flag = 1;
				$count++;
			}
			if ($name == 'Pharmacy Students Society') {
				echo "<div class='result'><a href='clubs2.php '>" . $name . "</a></div><br>";
				$flag = 1;
				$count++;
			}
			if ($name == 'Hindu Society') {
				echo "<div class='result'><a href='clubs.php '>" . $name . "</a></div><br>";
				$flag = 1;
				$count++;
			}
			if ($name == 'Christian Society') {
				echo "<div class='result'><a href='clubs.php '>" . $name . "</a></div><br>";
				$flag = 1;
				$count++;
			}
			if ($name == 'Sikh Society') {
				echo "<div class='result'><a href='clubs.php '>" . $name . "</a></div><br>";
				$flag = 1;
				$count++;
			}
			if ($name == 'Chinese Society') {
				echo "<div class='result'><a href='clubs.php '>" . $name . "</a></div><br>";
				$flag = 1;
				$count++;
			}
			if ($name == 'Muslim Society') {
				echo "<div class='result'><a href='clubs.php '>" . $name . "</a></div><br>";
				$flag = 1;
				$count++;
			}
			if ($name == 'International Commerce Club') {
				echo "<div class='result'><a href='clubs2.php '>" . $name . "</a></div><br>";
				$flag = 1;
				$count++;
			}
			if ($name == 'Cricket Club') {
				echo "<div class='result'><a href='clubs.php '>" . $name . "</a></div><br>";
				$flag = 1;
				$count++;
			}
			if ($name == 'Badminton Club') {
				echo "<div class='result'><a href='clubs.php '>" . $name . "</a></div><br>";
				$flag = 1;
				$count++;
			}
			if ($name == 'Futsal &amp; Football Club') {
				echo "<div class='result'><a href='clubs.php '>" . $name . "</a></div><br>";
				$flag = 1;
				$count++;
			}
			if ($name == 'Basketball Club') {
				echo "<div class='result'><a href='clubs.php '>" . $name . "</a></div><br>";
				$flag = 1;
				$count++;
			}
			if ($name == 'Gamers Club') {
				echo "<div class='result'><a href='clubs2.php '>" . $name . "</a></div><br>";
				$flag = 1;
				$count++;
			}
			if ($name == 'Indoor Club') {
				echo "<div class='result'><a href='clubs.php '>" . $name . "</a></div><br>";
				$flag = 1;
				$count++;
			}
			if ($name == 'Outdoor Club') {
				echo "<div class='result'><a href='clubs.php '>" . $name . "</a></div><br>";
				$flag = 1;
				$count++;
			}

		}
	}
	
	if($count == 1){
		echo "<br><br><br><br><br><br><br>";
	}
	
	if($flag == 0){
		echo "<div class='result'>No Result</div><br><br>";
		echo "<br><br><br><br><br><br><br>";
	}
	
	?>

	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script>
		$(document).ready(function(){
			$(".result").fadeIn(1500);
		});
	</script>
	
	<div class="footer">
		<h4>Stay Connected</h4>
		<div class="links">
			<a href="https://www.facebook.com/QuestInternationalUniversityPerak/" target="_blank"><i class="fa fa-facebook-square"></i></a>
			<a href="https://twitter.com/qiup_edu?lang=en"  target="_blank"><i class="fa fa-twitter-square"></i></a>
			<a href="https://www.instagram.com/qiup_edu/?hl=en"  target="_blank"><i class="fa fa-instagram"></i></a>
			<a href="http://www.qiup.edu.my/" target="_blank"><i class="fa fa-globe" ></i></a>
			<a href="mailto:enquiries@qiup.edu.my" target="_blank"><i class="fa fa-envelope-o"></i></a>
			<a href="tel:+6052490500" target="_blank"><i class="fa fa-phone"></i></a>
		</div> <!-- END links -->
		<p>Copyright 2019 &copy; Tan, Seb, Jason, Reshmi</p>
	</div> <!-- END footer -->
	
</body>

</html>