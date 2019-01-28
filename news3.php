<html>

<head>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	
	<title>Fireside Chat with Selina Boay</title>
	
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
		<h1>Fireside Chat with Selina Boay: A Corporate High-Flyer Who Threw It All</h1>
		<br>
		<p class="pimg"><img src="src/assets/fireside.jpg" width="800px" height="550px"></p>
		<div class="para">
			<p>
				Quest International University Perak is honored to host Ms. Selina Boay, a former APAC Regional Finance Director of Johnson & Johnson 
				to share her insight on career development & experience.<br>
				Join us at a fireside chat and find out what corporate employers are looking for and which skills are essential for paving a successful career 
				in today's highly competitive corporate world.
				<ul>
					<li>Date: Friday, 25th January 2019</li>
					<li>Time: 12:00PM - 1:15PM</li>
					<li>Venue: QIU Auditorium, Level 3 @ TTS</li>
				</ul>
				<i><b>Ms.Selina</b>, Former Regional Finance Director (APAC) of Johnson & Johnson</i>,  has over 2 decades of experience in Assurance, Management Consulting, 
				Outsourcing & Shared Services. She was involved in & subsequently led the set up shared service centers for Accenture and Johnson & Johnson, with combined 
				global revenues of over US$116bil. Selina has worked in the IT, Insurance, Healthcare & FMCG industries, responsible for providing financial processing and 
				reporting operations for over 80 local businesses & industry groups across multiple regions. Passionate about mentoring & coaching, 
				she has personally developed future financial and business leaders from her combined organizations of over 1000 employees. 
				She has also provided domain expertise advice to other companies on behest of the SIP govt. In addition to her responsibilities, 
				Selina has served both companies in dynamic areas such as crisis management - pivoting failing operations & managing through emergency infectious 
				disease & disaster recovery. An avid cyclist and outdoors person, she continues to pursue interests in endurance and adventure tours, stepped down as 
				Regional Finance Director (APAC) from Johnson and Johnson in late 2018.<br><br>
				See you there!
				
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