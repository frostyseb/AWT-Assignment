<?php 
	require_once "config.php";

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
		<img src="src\assets\quest_logo.png">
		<h2 id="login_title">Quest International University Perak<br>CCA Portal</h2>
		<p id="login_descp">Login now to discover upcoming CCA events & activities</p>
		<img src="src\assets\photos.png" class="col-xs-12 cca_photos"><br>
		<button type="button" onclick="window.location = '<?php echo $loginURL ?>';" class="btn btn-outline-danger btn-block"><i class="fab fa-google"></i> SIGN IN WITH GOOGLE</button>

	</div>
	
</body>
<?php include 'includes/bootstrapF.inc.php'; ?>
</html>
