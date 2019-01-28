<html>

<head>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	
	<title>Student Representative Council Nomination 2019</title>
	
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
		<h1>Student Representative Council Nomination 2019</h1>
		<br>
		<p class="pimg"><img src="src/assets/src.jpg" width="800px" height="550px"><center>Student Representative Council 2017 / 2018</center></p>
		<div class="para">
			<p>
			<br>
				With reference to the above matter, please be informed that the current Quest International University Perak Student Representative Council (QSRC) 
				Session 2017/2018 will be <b>DISSOLVED EFFECTIVE</b> January 24th 2019. Therefore, QIU will conduct the QSRC 2019/2021 Election as follow details:
				<ul>
					<li>Collection of Nomination Form starting from         : January 25th- February 11th, 2019</li>
					<li>Handing in Nomination Form                                    : January 25th- February 11th, 2019</li>      
					<li>Nomination Day and announcement                        : February 12th, 2019</li>
					<li>Campaign period                                                        : February 13th – 24th, 2019</li>
					<li>Election date                                                               : February 25th – 26th 2019 (online)</li>
					<li>Announcement of election results                           : February 26th, 2019</li>
					<li>Conferral ceremony for QSRC 2019/2021                : February 27th, 2019</li>
					<li>QIUP Leadership Retreat 4.0 (04/19)                         : March 6th, 2019*</li>
				</ul>
				<b>ELIGIBILITY FOR NOMINATION</b><br>
				The criteria to be nominated as a candidate are as follows:
				<ol type="I">
					<li>All candidates MUST have at least TWO (2) normal semesters to graduate from QIUP at the time of nomination day. However, as for MBBS students they must be from year one and year two only;</li>
					<li>All diploma and degree candidates MUST have a CGPA of at least 2.50 or EQUIVALENT at the time of nomination except for new students in the first semester and foundation students;</li>
					<li>All candidates must be endorsed by the Dean or the Deputy Dean of the faculty;</li>
					<li>All candidates must have an excellent track record in good behavior. They should not have any disciplinary record, convicted or pending for any disciplinary offence.</li>
					<li>Students who have not been required to repeat one or more semesters.</li>
				</ol>
				<b>POST CONTESTED</b>
				<ol type="I">
					<li>President</li>
					<li>Secretary</li>
					<li>Treasurer</li>
					<li>6 Exco Members</li>
				</ol>
				<b>NOMINATION FORMS</b>
				<ol>
					<li>Nomination Forms can be collected from the Students Affairs Division (STAD);</li>
					<li>The completed form must be endorsed by the Dean or Deputy Dean before  submission during the handing of nomination form period ;</li>
					<li>A candidate is allowed to compete for ONE (1) SEAT only;</li>
					<li>A candidate cannot be the proposer and seconder for other candidates;</li>
					<li>A proposer and a seconder cannot propose or second more than one candidate;</li>
					<li>The proposer and the seconder should bring QIUP student identification card during the nomination day; and</li>
					<li>The candidate should bring QIUP student identification card during the nomination day.</li>
				</ol>
				<b>“ARISE, AWAKE, ACHIEVE”</b>
				
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