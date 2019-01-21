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
	<link rel="stylesheet" href="vendor\font-awesome\css\font-awesome.css">
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
					<input type="Submit" value = "Log In" class = "btn btn-primary">
					<input type="Button" value="Log In with Google" class="btn btn-danger">
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