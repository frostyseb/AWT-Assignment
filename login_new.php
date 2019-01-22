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
	
	<!--CSS Stylesheet-->
	<link rel="stylesheet" href="styles.css">
	
	<!--Google font style-->
	<link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">
	
</head>

<body>
	
	<div class="form_box">
		<img src="quest_logo.png">
		<h2 id="login_title">Quest International University Perak<br>CCA Portal</h2>
		<p id="login_descp">Login now to discover upcoming CCA events & activities</p>
		<img src="photos.png" width="400px" height="200px"><br>
		<button type="button" onclick="window.location = '<?php echo $loginURL ?>';" class="btn btn-outline-danger btn-block"><i class="fab fa-google"></i> SIGN IN WITH GOOGLE</button>

	</div>
	
</body>

</html>
