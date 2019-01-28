<html>

<head>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	
	<title>DBM Closed Bowling Tournament 2019</title>
	
	<!--Bootstrap js-->
	<?php include 'includes/bootstrapH.inc.php'; ?>
	
	<!--Bing Maps API-->
	<script type='text/javascript' src='https://www.bing.com/api/maps/mapcontrol?callback=GetMap&key=[AhaTsBSRH-3R1UouWUX8JfrJ__a8V7Vig2rdgB1wpYI7QbyD5DocHRKdKNUDqJi9]' async defer></script>
	
	<!--Title Bar Icon-->
	<link rel="icon" type="image/ico" href="src/assets/quest_logo.png">
	
	<!--Google font style-->
	<link href="https://fonts.googleapis.com/css?family=Alegreya|Exo|KoHo" rel="stylesheet">
	
	<!--CSS Stylesheets-->
	<link rel="stylesheet" href="src/css/styles_news.css" type="text/css">

</head>

<?php include 'simpleNav.php';?>

<body>
	<div class="conference">
		<h1>DBM Closed Bowling Tournament 2019</h1>
		<br>
		<p class="pimg"><img src="src/assets/bowling.jpg" width="800px" height="400px"></p>
		<div class="para">
			<p>
				The DBM students are organizing a DBM Closed Bowling Tournament 2019 and the details is stated in the poster attached. 
				<ul>
					<li>Date: 20/02/2019 (Wednesday)</li>
					<li>Time: 4.30PM - 8.00PM</li>
					<li>Place: Ampang Superbowl, level 3, Ipoh Parade, Perak.</li>
					<li>Price: RM70.00 (3 persons in a team - students only);</li>
				</ul>
				<b>**If there is a combination of staff + student in a group therefore fees is RM80.00 per team.</b><br><br>
				Tentative:
				<ul>
					<li>Registration time: 4.30pm - 5.15pm</li>
					<li>Opening and warm up: 5.20pm - 5.35pm</li>
					<li>Roll-off: 5.40pm - 5.45pm</li>
					<li>Medal presentation: 7.30pm - 7.45pm</li>
					<li>Event ends: 8.00pm +/-</li>
				</ul>
				<b>**please be punctual and bring your own socks and please follow the rules and regulations of bowling.</b><br><br>
				The registration forms can be collected & submitted to the pic below latest by 15/02/2019 (Friday). 
				Registration booth will be open at the student lounge on certain days. You may contact the 
				respective persons below for more enquiries.<br><br>
				<i>- Jason Lok - 0165155784</i><br>
				<i>- Harpreet Singh - 0125494601</i><br>
				<i>- Kaliswari - 0163859065</i><br><br>
				Hope to hear from you soon!! 
				
				<br><br>
				
				Location on &nbsp;<i class="fa fa-map"></i> Bing Maps<br>
				<div id="myMap" style='position:relative;width:600px;height:400px;'></div>
			</p>
		</div><!--END para-->
	</div><!--END conference-->
	
	<script type='text/javascript'>
		function GetMap()
		{
			var map = new Microsoft.Maps.Map('#myMap',{

			credentials: 'AhaTsBSRH-3R1UouWUX8JfrJ__a8V7Vig2rdgB1wpYI7QbyD5DocHRKdKNUDqJi9',
			center: new Microsoft.Maps.Location(4.59494, 101.08962),
			mapTypeId: Microsoft.Maps.MapTypeId.aerial,
			zoom: 17
			});
		}
	</script>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script>
		$(document).ready(function(){
			$(".conference").fadeIn(1500);
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