<?php 
	require_once "config.php";
// comment
	$loginURL = $gClient->createAuthUrl();
 ?>

<!DOCTYPE html>
<html>

<head>
	<title>Login</title>
	
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	
	<?php include 'includes/bootstrapH.inc.php'; ?>
		<!--CSS Stylesheet-->
		<link rel="stylesheet" href="src\css\styles.css">
	
	<!--Google font style-->
	<link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">
</head>

<body>
	
	<div class="form_box">
		<a href="http://www.qiup.edu.my" target="_blank"><img src="src\assets\quest_logo.png"></a>
		<h2 id="login_title">Quest International University Perak<br>CCA Portal</h2>
		<p class="form_element">Login now to discover upcoming CCA events & activities</p>
		<img src="src\assets\photos.png" class="col-xs-12 cca_photos"><br><br>
		<button type="button" onclick="window.location = '<?php echo $loginURL ?>';" class="btn btn-outline-danger btn-block"><i class="fab fa-google"></i> SIGN IN WITH GOOGLE</button>
	</div> <!-- END form_box -->
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script>
		$(document).ready(function(){
			$(".form_box").fadeIn(1500)
		});

	</script>
	
</body>
<?php include 'includes/bootstrapF.inc.php'; ?>
</html>
