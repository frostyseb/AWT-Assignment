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
	<link href="https://fonts.googleapis.com/css?family=Roboto+Slab|Dosis|Indie+Flower" rel="stylesheet">
	
	<!--Bootstrap CSS for slideshow-->
	<link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	<!--CSS Stylesheet-->
	<link rel="stylesheet" href="src/css/styles_main_page.css" type="text/css">
	
	<!--Facebook API-->
	<script src="API/FacebookAPI/fbAjax.js"></script>
	<?php include 'API/FacebookAPI/facebook_feed.php'; ?>
	<?php include 'API/FacebookAPI/facebook_feed_next.php'; ?>
	<?php include 'API/FacebookAPI/facebook_functions.php'; ?>
	
</head>
<?php include 'simpleNav.php';?>
<script src="suggest.js"></script>
<body>
	<div id = "header">
		<div class='m'>
			<font face="Indie Flower"><marquee scrollamount="10">! ! WELCOME TO THE QIUP CCA WEBSITE ! !</marquee></font>
		</div>
	</div>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	
	<h3>Previous Events</h3>
	
	<div id="carouselExampleIndicators" class="carousel slide my-carousel" data-ride="carousel">
	  <ol class="carousel-indicators">
		<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
		<li data-target="#carouselExampleIndicators" data-slide-to="1" class=""></li>
		<li data-target="#carouselExampleIndicators" data-slide-to="2" class=""></li>
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
	  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
	  </a>
	  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
		<span class="carousel-control-next-icon" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
	  </a>
	</div> <!-- END carouselExampleIndicators -->
	
	<!--Bootstrap js for slideshow-->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<script src="Touch-Swipe-Bootstrap-Carousel/dist/bootstrap-swipe-carousel.js"></script>
	
	
	<div id="facebook_feed">
		<h3>The Latest</h3>

		<div class="sk-cube-grid">
		  <div class="sk-cube sk-cube1"></div>
		  <div class="sk-cube sk-cube2"></div>
		  <div class="sk-cube sk-cube3"></div>
		  <div class="sk-cube sk-cube4"></div>
		  <div class="sk-cube sk-cube5"></div>
		  <div class="sk-cube sk-cube6"></div>
		  <div class="sk-cube sk-cube7"></div>
		  <div class="sk-cube sk-cube8"></div>
		  <div class="sk-cube sk-cube9"></div>
		</div> <!-- END sk-cube-grid -->

		<div id="ajax_response">
		</div> <!-- END ajax_response -->

	</div> <!-- END facebook_feed -->
	
	
	<?php include 'includes/bootstrapF.inc.php'; ?>
	
</body>



</html>