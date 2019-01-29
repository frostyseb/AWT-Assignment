<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">

	<title>QIUP CCA Portal</title>

	<!--Bootstrap js-->
	<?php include 'includes/bootstrapH.inc.php'; ?>

	<!--Title Bar Icon-->
	<link rel="icon" type="image/ico" href="src/assets/quest_logo.png">
	
	<!--Google font style-->
	<link href="https://fonts.googleapis.com/css?family=Roboto+Slab|Indie+Flower|Comfortaa|Special+Elite|Exo" rel="stylesheet">

	<!--Bootstrap CSS for slideshow-->
	<link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
	 crossorigin="anonymous">
	 
	<!--Bootstrap for Back to Top-->
	<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">

	<!--CSS Stylesheet-->
	<link rel="stylesheet" href="src/css/styles_main_page.css" type="text/css">

</head>

<?php include 'simpleNav.php';?>

<script src="suggest.js"></script>

<body>
	<!--Facebook API-->
	<div id="fb-root"></div>
	<script>
		(function (d, s, id) {
			var js, fjs = d.getElementsByTagName(s)[0];
			if (d.getElementById(id)) return;
			js = d.createElement(s);
			js.id = id;
			js.src = 'https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v3.2';
			fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));
	</script>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<h3 class="ev" id="top">News & Updates</h3>

	<!--News Carousel-->
	<div id="news" class="carousel slide my-carousel" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#news" data-slide-to="0" class="active"></li>
			<li data-target="#news" data-slide-to="1" class=""></li>
			<li data-target="#news" data-slide-to="2" class=""></li>
			<li data-target="#news" data-slide-to="3" class=""></li>
			<li data-target="#news" data-slide-to="4" class=""></li>
		</ol>
		<div class="carousel-inner">
			<div class="carousel-item active">
				<a href="news1.php" title="Conference on Digital Marketing and Entrepreneurship 2019"><img class="d-block w-100" src="src/assets/news1.png"></a>
			</div> <!-- END carousel-item active -->
			<div class="carousel-item">
				<a href="news2.php" title="Student Representative Council Nomination 2019"><img class="d-block w-100" src="src/assets/news2.png"></a>
			</div> <!-- END carousel-item -->
			<div class="carousel-item">
				<a href="news3.php" title="Fireside Chat with Selina Boay: A Corporate High-Flyer Who Threw It All"><img class="d-block w-100" src="src/assets/news3.png"></a>
			</div> <!-- END carousel-item -->
			<div class="carousel-item">
				<a href="news4.php" title="Blood Donation Campaign"><img class="d-block w-100" src="src/assets/news4.png"></a>
			</div> <!-- END carousel-item -->
			<div class="carousel-item">
				<a href="news5.php" title="DBM Closed Bowling Tournament 2019"><img class="d-block w-100" src="src/assets/news5.png"></a>
			</div> <!-- END carousel-item -->
		</div> <!-- END carousel-inner -->
		<a class="carousel-control-prev" href="#news" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#news" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div> <!-- END carousel -->

	<br><br>
	<h3 class="ev">Recent Events</h3>

	<!-- Events Carousel -->
	<div id="events" class="carousel slide my-carousel" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#events" data-slide-to="0" class="active"></li>
			<li data-target="#events" data-slide-to="1" class=""></li>
			<li data-target="#events" data-slide-to="2" class=""></li>
			<li data-target="#events" data-slide-to="3" class=""></li>
			<li data-target="#events" data-slide-to="4" class=""></li>
		</ol>
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img class="d-block w-100" src="src/assets/pic1.png" alt="First slide">
			</div> <!-- END carousel-item active -->
			<div class="carousel-item">
				<img class="d-block w-100" src="src/assets/pic2.png" alt="Second slide">
			</div> <!-- END carousel-item -->
			<div class="carousel-item">
				<img class="d-block w-100" src="src/assets/pic3.png" alt="Third slide">
			</div> <!-- END carousel-item -->
			<div class="carousel-item">
				<img class="d-block w-100" src="src/assets/pic4.png" alt="Fourth slide">
			</div> <!-- END carousel-item -->
			<div class="carousel-item">
				<img class="d-block w-100" src="src/assets/pic5.png" alt="Fifth slide">
			</div> <!-- END carousel-item -->
		</div> <!-- END carousel-inner -->
		<a class="carousel-control-prev" href="#events" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#events" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div> <!-- END events -->

	<!--Bootstrap js for slideshow-->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
	 crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
	 crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
	 crossorigin="anonymous"></script>
	<script src="Touch-Swipe-Bootstrap-Carousel/dist/bootstrap-swipe-carousel.js"></script>

	<div id="header">
		<div class='m'>
			<br>
			<font face="Indie Flower"><strong>
					<marquee scrollamount="10">! ! WELCOME TO THE QIUP CCA WEBSITE ! !</marquee>
				</strong></font>
		</div> <!-- END m -->
	</div> <!-- END header -->

	<div class="fbAPI">
		<br>
		<h4>Check out the latest CCA activities or <br>events from <i class="fa fa-facebook-square" style="color:darkblue;"></i>
			QIUP Facebook!</h4>
		<div class="fb-page" data-href="https://www.facebook.com/QuestInternationalUniversityPerak/" data-tabs="timeline"
		 data-width="500" data-height="1270" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false"
		 data-show-facepile="false">
			<blockquote cite="https://www.facebook.com/QuestInternationalUniversityPerak/" class="fb-xfbml-parse-ignore">
				<a href="https://www.facebook.com/QuestInternationalUniversityPerak/">Quest International University Perak (QIUP)</a>
			</blockquote>
		</div> <!-- END fb-page -->
	</div> <!-- END fbAPI -->

	<br>
	<?php
	echo "<div class='clubSoc'><h4 class='ev'>Clubs & Societies</h4>";
	
	$xml = simplexml_load_file("clubs_societies.xml") or die("Error: Cannot create object");
	
	echo "<div class='list'>";
	
	foreach($xml->club as $name) {
		

		if ($name == 'Music Club') {
			echo "<div class='list-item'><a href='clubs2.php '><b>" . $name . "</b></a></div>";
		}
		if ($name == 'Debate Club') {
			echo "<div class='list-item'><a href='clubs2.php '><b>" . $name . "</b></a></div>";
		}
		if ($name == 'Care Club') {
			echo "<div class='list-item'><a href='clubs2.php '><b>" . $name . "</b></a></div>";
		}
		if ($name == 'Innovation Club') {
			echo "<div class='list-item'><a href='clubs2.php '><b>" . $name . "</b></a></div>";
		}
		if ($name == 'Photography Club') {
			echo "<div class='list-item'><a href='clubs2.php '><b>" . $name . "</b></a></div>";
		}
		if ($name == 'Biotech Club') {
			echo "<div class='list-item'><a href='clubs2.php '><b>" . $name . "</b></a></div>";
		}
		if ($name == 'International Students Club') {
			echo "<div class='list-item'><a href='clubs2.php '><b>" . $name . "</b></a></div>";
		}
		if ($name == 'Human Resource Club') {
			echo "<div class='list-item'><a href='clubs2.php '><b>" . $name . "</b></a></div>";
		}
		if ($name == 'Student Representative Council') {
			echo "<div class='list-item'><a href='clubs2.php '><b>" . $name . "</b></a></div>";
		}
		if ($name == 'Pharmacy Students Society') {
			echo "<div class='list-item'><a href='clubs2.php '><b>" . $name . "</b></a></div>";
		}
		if ($name == 'Hindu Society') {
			echo "<div class='list-item'><a href='clubs.php '><b>" . $name . "</b></a></div>";
		}
		if ($name == 'Christian Society') {
			echo "<div class='list-item'><a href='clubs.php '><b>" . $name . "</b></a></div>";
		}
		if ($name == 'Sikh Society') {
			echo "<div class='list-item'><a href='clubs.php '><b>" . $name . "</b></a></div>";
		}
		if ($name == 'Chinese Society') {
			echo "<div class='list-item'><a href='clubs.php '><b>" . $name . "</b></a></div>";
		}
		if ($name == 'Muslim Society') {
			echo "<div class='list-item'><a href='clubs.php '><b>" . $name . "</b></a></div>";
		}
		if ($name == 'International Commerce Club') {
			echo "<div class='list-item'><a href='clubs2.php '><b>" . $name . "</b></a></div>";
		}
		if ($name == 'Cricket Club') {
			echo "<div class='list-item'><a href='clubs.php '><b>" . $name . "</b></a></div>";
		}
		if ($name == 'Badminton Club') {
			echo "<div class='list-item'><a href='clubs.php '><b>" . $name . "</b></a></div>";
		}
		if ($name == 'Futsal &amp; Football Club') {
			echo "<div class='list-item'><a href='clubs.php '><b>" . $name . "</b></a></div>";
		}
		if ($name == 'Basketball Club') {
			echo "<div class='list-item'><a href='clubs.php '><b>" . $name . "</b></a></div>";
		}
		if ($name == 'Gamers Club') {
			echo "<div class='list-item'><a href='clubs2.php '><b>" . $name . "</b></a></div>";
		}
		if ($name == 'Indoor Club') {
			echo "<div class='list-item'><a href='clubs.php '><b>" . $name . "</b></a></div>";
		}
		if ($name == 'Outdoor Club') {
			echo "<div class='list-item'><a href='clubs.php '><b>" . $name . "</b></a></div>";
		}
	}
	
	echo "</div></div>";
	?>

	<script>
		$('.list-item')
			.on('mouseenter', function () {
				var div = $(this);
				div.stop(true, true).animate({
					width: "72%",
					height: "50%",
					padding: "1.3em"
				}, 'fast');
			})
			.on('mouseleave', function () {
				var div = $(this);
				div.stop(true, true).animate({
					width: "70%",
					height: "20%",
					padding: "1em"
				}, 'fast');
			})
	</script>

	<?php include 'includes/bootstrapF.inc.php'; ?>

	<a href="javascript:" id="return-to-top"><i class="icon-chevron-up"></i></a>
	
	<script>
		$(window).scroll(function() {
			if ($(this).scrollTop() >= 50) {        // If page is scrolled more than 50px
				$('#return-to-top').fadeIn(200);    // Fade in the arrow
			} else {
				$('#return-to-top').fadeOut(200);   // Else fade out the arrow
			}
		});
		
		$('#return-to-top').click(function() {      // When arrow is clicked
			$('body,html').animate({
				scrollTop : 0                       // Scroll to top of body
			}, 500);
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

<script>
	$(document).ready(
		function () {
			$(".navbar-collapse").hide();
		}
	)
	$(".navbar-toggler-icon").click(
		function () {
			$(".navbar-collapse").toggle(500).delay(200);
		}
	)
</script>

<style>
body{
	margin-top:150px;
}
</style>

</html>