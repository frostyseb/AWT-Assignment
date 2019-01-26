<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	
	<title>QIUP CCA Portal</title>
	
	<!--Bootstrap js-->
	<?php include 'includes/bootstrapH.inc.php'; ?>

	<!--Google font style-->
	<link href="https://fonts.googleapis.com/css?family=Roboto+Slab|Dosis|Indie+Flower|Comfortaa" rel="stylesheet">
	
	<!--Bootstrap CSS for slideshow-->
	<link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	<!--CSS Stylesheet-->
	<link rel="stylesheet" href="src/css/styles_main_page.css" type="text/css">
	
</head>

<?php include 'simpleNav.php';?>

<script src="suggest.js"></script>

<body>
	<!--Facebook API-->
	<div id="fb-root"></div>
	<script>
		(function(d, s, id) {
			var js, fjs = d.getElementsByTagName(s)[0];
			if (d.getElementById(id)) return;
			js = d.createElement(s); js.id = id;
			js.src = 'https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v3.2';
			fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));
	</script>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<h3>News & Updates</h3>

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
		<div id="news-item">
			<b>BREAKING NEWS</b>
			<p>Free CCA hours for everybody</p>
	</div>
	</div> <!-- END carousel-item active -->
	<div class="carousel-item">
		<div id="news-item">Insert news here</div>
	</div> <!-- END carousel-item -->
	<div class="carousel-item">
		<div id="news-item">Insert news here</div>
	</div> <!-- END carousel-item -->
	<div class="carousel-item">
		<div id="news-item">Insert news here</div>
	</div> <!-- END carousel-item -->
	<div class="carousel-item">
		<div id="news-item">Insert news here</div>
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

	<h3>Recent Events</h3>

	<!-- Events Carousel -->
	<div id="events" class="carousel slide my-carousel" data-ride="carousel">
	  <ol class="carousel-indicators">
		<li data-target="#events" data-slide-to="0" class="active"></li>
		<li data-target="#events" data-slide-to="1" class=""></li>
		<li data-target="#events" data-slide-to="2" class=""></li>
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
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<script src="Touch-Swipe-Bootstrap-Carousel/dist/bootstrap-swipe-carousel.js"></script>
	
	<div id = "header">
		<div class='m'>
			<br>
			<font face="Indie Flower"><strong><marquee scrollamount="10">! ! WELCOME TO THE QIUP CCA WEBSITE ! !</marquee></strong></font>
		</div> <!-- END m -->
	</div> <!-- END header -->
	
	<div class="fbAPI">
		<br>
		<h4>Check out the latest CCA activities or <br>events from  <i class="fa fa-facebook-square" style="color:darkblue;"></i> QIUP Facebook!</h4>
		<div class="fb-page" data-href="https://www.facebook.com/QuestInternationalUniversityPerak/" data-tabs="timeline" data-width="500" data-height="800" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false">
			<blockquote cite="https://www.facebook.com/QuestInternationalUniversityPerak/" class="fb-xfbml-parse-ignore">
				<a href="https://www.facebook.com/QuestInternationalUniversityPerak/">Quest International University Perak (QIUP)</a>
			</blockquote>
		</div> <!-- END fb-page -->
	</div> <!-- END fb-api -->
	
	<h4>Clubs & Societies</h4>
	<div class="list">
		<div class="list-item">Music Club</div>
		<div class="list-item">Debate Club</div>
		<div class="list-item">Care Club</div>
		<div class="list-item">Innovation Club</div>
		<div class="list-item">Photography Club</div>
		<div class="list-item">Biotech Club</div>
		<div class="list-item">International Students Club</div>
		<div class="list-item">Human Resource Club</div>
		<div class="list-item">Student Representative Council</div>
		<div class="list-item">Pharmacy Students Society</div>
		<div class="list-item">Hindu Society</div>
		<div class="list-item">Christian Society</div>
		<div class="list-item">Sikh Society</div>
		<div class="list-item">Chinese Society</div>
		<div class="list-item">Muslim Society</div>
		<div class="list-item">International Commerce Club</div>
		<div class="list-item">Cricket Club</div>
		<div class="list-item">Badminton Club</div>
		<div class="list-item">Futsal & Football Club</div>
		<div class="list-item">Basketball Club</div>
		<div class="list-item">Gamers Club</div>
		<div class="list-item">Indoor Club</div>
		<div class="list-item">Outdoor Club</div>
	</div>
	
	<?php include 'includes/bootstrapF.inc.php'; ?>
	
</body>

<script>
$(document).ready(
	function() {
		$(".navbar-collapse").hide();
	}
)
$(".navbar-toggler-icon").click(
    function() {
        $(".navbar-collapse").toggle(500).delay(200);
    }
)
</script>

</html>