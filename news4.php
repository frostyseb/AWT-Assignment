<html>

<head>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	
	<title>Blood Donation Campaign</title>
	
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
		<h1>Blood Donation Campaign</h1>
		<br>
		<p class="pimg"><img src="src/assets/donate.jpg" width="800px" height="300px"></p>
		<div class="para">
			<p>
				We are pleased to inform you that the Student Affairs Division (STAD) in collaboration with Hospital Raja Permaisuri Bainun (HRPB) 
				will be holding a Blood Donation Campaign 10.0 as follow details:<br><br>
				<b>When and where to donate?</b>
				<ul>
					<li>Date / Day : January 22nd 2019 / Tuesday</li>
					<li>Venue        : Student Centre</li>
					<li>Time          : 10.00 AM to 4.00 PM</li>
				</ul>
				You may drop by anytime but please know that the process of donating will take about 30 minutes.<br><br>
				<b>Who can donate?</b><br>
				Any healthy individual between the ages of 18 - 60 can be a blood donor.<br><br>
				<b>Why donate?</b><br>
				You will help save a life in an emergency medical situation and you never know when you will need the help of a blood donor to save yours. 
				Also, donating blood makes you eligible for free outpatient treatment, free Hepatitis B vaccination and many other benefits from 
				Government Hospitals depending on the number of times you donate blood.<br><br>
				<b>Who will benefit?</b><br>
				<ul>
					<li>Friends, family, and neighbours who are put in danger because of sickness or accidents</li>
					<li>Cardiac patients needing surgery and/or blood transfusions</li>
					<li>Premature infants that need blood to survive</li>
				</ul>
				<b><i>Please bring along your Student Id / Identification Card (IC) for verification purposes. </i></b><br><br>
				<i># Light refreshment will be provided for donors</i><br>
				<i># CCA hrs will be granted</i><br>
				<i># Certificate (for donors) - You may collect it at STAD.</i><br><br>
				Kindly contact Mr. Dasuki at 0193464153/0122027211 for any queries.
				
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
			center: new Microsoft.Maps.Location(4.583510, 101.093020),
			mapTypeId: Microsoft.Maps.MapTypeId.aerial,
			zoom: 18
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