<?php 
	require_once "config.php";

	if(isset($_SESSION['access_token'])){
		header('Location: index.php');
		exit();
	}

	$loginURL = $gClient->createAuthUrl();
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	
	<title>Login with Google</title>
	<!-- Google Api -->
	  <!-- Font -->
	  <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Raleway:400,800" />
	<!-- Font awesome bootstrap-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
	<!-- Bootstrap CSS and JS-->
	<link rel="stylesheet" href="vendor/node_modules/bootstrap/dist/css/bootstrap.css">
    <script src="vendor/node_modules/bootstrap/dist/js/bootstrap.js"></script>
</head>

<body>
	<div class="container" style ="margin-top:100px">
		<div class="row justify-content-center">
			<div class="col-md-6 col-offset-3" align = "center">
				<img src="" alt=""><br><br>
				<form>
					<input placeholder="Email..." name = "email" class="form-control"><br>
					<input type = "password" placeholder="Password..." name = "password" class="form-control"><br><br>
					<input type="Submit" value = "Log In" class = "btn btn-outline-primary btn-block">
					<button type="button" onclick="window.location = '<?php echo $loginURL ?>';" class="btn btn-outline-danger btn-block"><i class="fab fa-google"></i> SIGN IN WITH GOOGLE</button>
				</form>
			</div>
		</div>
	</div>
</body>

<body>
	
	<!--jQuery first, then Bootstrap JS. -->
	  <!--Load the CDN first-->
	  <script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" 
	  crossorigin="anonymous"></script>
	  <!-- If CDN failed to load, serve up the local version -->
	  <script>window.jQuery || document.write('<script src="vendor/node_modules/jquery/dist/jquery.js"><\/script>')</script>

    <!-- Load jQuery --> 
	<!--<script src="vendor/node_modules/initjQuery.js"></script>-->

</body>
</html>