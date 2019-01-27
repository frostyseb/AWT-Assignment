<?php 
	session_start();

	include_once 'includes/Dbh.inc.php';
	include_once 'includes/user.inc.php';
	
	if(!isset($_SESSION['access_token'])){
		header('Location: login.php');
		exit();
	}

	// define variables and set to empty values
	$id = $givenName = $familyName = $email = $gender = "";

	if ($_SERVER["REQUEST_METHOD"] == "POST") {

	$id = $_POST["id"];
	$givenName = $_POST["givenName"];
	$familyName = $_POST["familyName"];
	$email = $_POST["email"];
	$gender = $_POST["gender"];

	//var_dump($gender);

	$userDataArray = array(
        'oProvider'=> 'google',
        'oUid'     => $id,
        'fName'    => $givenName,
        'lName'    => $familyName,
        'email'    => $email,
        'gender'   => $gender,
        'locale'   => 'en',
		'picture'  => $_SESSION['picture']

	);
	
	$user = new User;
	$finalUserData = $user->checkUser($userDataArray);
	$user->updateGender($gender);
	$user->fetchUser();

    header('Location: '.$_SERVER['REQUEST_URI']);
}

$pageWasRefreshed = isset($_SERVER['HTTP_CACHE_CONTROL']) && $_SERVER['HTTP_CACHE_CONTROL'] === 'max-age=0';

if($pageWasRefreshed ) {


} else {
   //do nothing;
}

 ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	<title>Login with Google</title>
	<!-- Google Api -->
	<!-- Font -->
	<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Raleway:400,800" />
	<!-- Font awesome bootstrap-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/"
	 crossorigin="anonymous">
	<!-- Bootstrap CSS and JS-->
	<link rel="stylesheet" href="vendor/node_modules/bootstrap/dist/css/bootstrap.css">
	<script src="vendor/node_modules/bootstrap/dist/js/bootstrap.js"></script>
</head>
<?php include 'simpleNav.php';?>

<body>
	<!------ Include the above in your HEAD tag ---------->

	<div class="container">
		<ul class="nav nav-tabs" role="tablist">
			<li class="nav-item">
				<a class="nav-link active" data-toggle="tab" href="#Profile">Profile</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" data-toggle="tab" href="#club">Club</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" data-toggle="tab" href="#menu2">Menu 2</a>
			</li>
		</ul>

		<!-- Tab panes -->
		<div class="tab-content">
			<div id="Profile" class="container tab-pane active"><br>
				<h3>Profile</h3>
				<div class="container" style="margin-top:100px;">
					<div class="row">
						<div class="col-md-3">
							<img style="width:80%;" src="<?php echo $_SESSION['picture']?>">
						</div>
						<div class="col-md-9">
							<table class="table table-hover table-bordered">
								<tbody>
									<form action="<?php echo htmlspecialchars($_SERVER[" PHP_SELF"]);?>" method = "POST" id = "updateUser">
										<tr>
											<td>ID</td>
											<td class="">
												<div class="">
													<?php echo $_SESSION['id']?>
													<i class='fa fa-lg fa-fw'></i>
												</div>

												<div class="input-group mb-3">
													<input type="text" value="<?php echo $_SESSION['id']?>" class="form-control" placeholder="" aria-label="ID"
													 aria-describedby="basic-addon2" name="id" id="id">
													<div class="input-group-append">
														<button class="btn btn-success btn-update" type="button"><i class='fa fa-pencil-square-o fa-lg fa-fw'></i>Update</button>
														<button class="btn btn-danger cancelBtn" type="button"><i class='fa fa-remove fa-lg fa-fw'></i></button>
													</div>
												</div>

											</td>
										</tr>
										<tr>
											<td>First Name</td>
											<td class="table-col">
												<div class="info">
													<?php echo $_SESSION['givenName']?>
													<i class='fa fa-pencil-square-o fa-lg fa-fw'></i>
												</div>
												<div class="input-group mb-3">
													<input type="text" class="form-control" placeholder="" aria-label="ID" aria-describedby="basic-addon2"
													 name="givenName" id="givenName">
													<div class="input-group-append">
														<button class="btn btn-success btn-update" type="button"><i class='fa fa-pencil-square-o fa-lg fa-fw'></i>Update</button>
														<button class="btn btn-danger cancelBtn" type="button"><i class='fa fa-remove fa-lg fa-fw'></i></button>
													</div>
												</div>
											</td>
										</tr>
										<tr>
											<td>Last Name</td>
											<td class="table-col">
												<div class="info">
													<?php echo $_SESSION['familyName']?>
													<i class='fa fa-pencil-square-o fa-lg fa-fw'></i>
												</div>

												<div class="input-group mb-3">
													<input type="text" class="form-control" placeholder="" aria-label="ID" aria-describedby="basic-addon2"
													 name="familyName" id="familyName">
													<div class="input-group-append">
														<button class="btn btn-success btn-update" type="button"><i class='fa fa-pencil-square-o fa-lg fa-fw'></i>Update</button>
														<button class="btn btn-danger cancelBtn" type="button"><i class='fa fa-remove fa-lg fa-fw'></i></button>
													</div>
												</div>
											</td>
										</tr>
										<tr>
											<td>Email</td>
											<td class="table-col">
												<div class="info">
													<?php echo $_SESSION['email']?>
													<i class='fa fa-pencil-square-o fa-lg fa-fw'></i>
												</div>

												<div class="input-group mb-3">
													<input type="text" class="form-control" placeholder="" aria-label="ID" aria-describedby="basic-addon2"
													 name="email" id="email">
													<div class="input-group-append">
														<button class="btn btn-success btn-update" type="button"><i class='fa fa-pencil-square-o fa-lg fa-fw'></i>Update</button>
														<button class="btn btn-danger cancelBtn" type="button"><i class='fa fa-remove fa-lg fa-fw'></i></button>
													</div>
												</div>
											</td>
										</tr>
										<tr>
											<td>Gender</td>
											<td class="table-col gender-tab">
												<div class="info">
													<?php echo $_SESSION['gender']?>
													<?php 
										$male = $female = "";
										if($_SESSION['gender'] == 'Female'){
											$female = "checked";
										}else if($_SESSION['gender'] == 'Male'){
											$male = "checked";
										}

									?>
													<i class='fa fa-pencil-square-o fa-lg fa-fw'></i>
												</div>
												<div class="input-group mb-3">
													<!--<input type="text" class="form-control" placeholder="" aria-label="ID" aria-describedby="basic-addon2" name ="gender" id ="gender">-->
													<div class="form-check form-check-inline">
														<label class="radio-container">Male
															<input class="" <?php echo $male?> type="radio" name="gender" class="" id ="male" value = "M">
															<span class="checkmark"></span>
														</label>
													</div>
													<!--<div class="form-check form-check-inline">
										<label class="radio-container">One
											<input type="radio"  name="radio">
											<span class="checkmark"></span>
										</label>
									</div>-->

													<div class="form-check form-check-inline">
														<label class="radio-container">Female
															<input class <?php echo $female?> ="" type="radio" name="gender" class="" id ="female" value = "F">
															<span class="checkmark"></span>
														</label>
													</div>
													<div class="input-group-append">
														<button class="btn btn-success btn-update" type="button"><i class='fa fa-pencil-square-o fa-lg fa-fw'></i>Update</button>
														<button class="btn btn-danger cancelBtn" type="button"><i class='fa fa-remove fa-lg fa-fw'></i></button>
													</div>
												</div>
											</td>
										</tr>

									</form>

									<tr>
										<td></td>
										<td>
											<form action="logout.php" class="form-inline pull-xs-right" style="" method="POST" id="logoutF">
												<a id="logoutBtn" class="btn btn-success" href="#" onclick="document.getElementById('logoutF').submit();">
													<i class="fa fa-sign-out fa-lg fa-fw" id="logout-fa"></i>
													<div style="Display:inline;">Logout</div>
												</a>
											</form>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
			<div id="club" class="container tab-pane fade"><br>
				<h3>Club</h3>
				<div class="container" style="margin-top:100px;">
					<div class="row">
						<div class="col-md-3">
							<img style="width:80%;" src="<?php echo $_SESSION['picture']?>">
						</div>
						<div class="col-md-9">
							<table class="table table-hover table-bordered">
								<tbody>
									<tr>
										<td>Name</td>
										<td class="">
											<div class="">
												<?php echo $_SESSION['givenName']." ". $_SESSION['familyName']?>
												<i class='fa fa-lg fa-fw'></i>
											</div>

											<div class="input-group mb-3">
												<input type="text" value="<?php echo $_SESSION['givenName']." ". $_SESSION['familyName']?>" class="form-control"
												 placeholder="" aria-label="ID" aria-describedby="basic-addon2" name="name" id="name">
												<div class="input-group-append">
													<button class="btn btn-success btn-update" type="button"><i class='fa fa-pencil-square-o fa-lg fa-fw'></i>Update</button>
													<button class="btn btn-danger cancelBtn" type="button"><i class='fa fa-remove fa-lg fa-fw'></i></button>
												</div>
											</div>
										</td>
										</td>
									</tr>
									<tr>
										<td>First Club</td>
										<td class="">
											<div class="">
												<?php echo $_SESSION['first_club']?>
											</div>

											<div class="input-group mb-3">
												<input value="" type="text" class="form-control" placeholder="" aria-label="ID" aria-describedby="basic-addon2"
												 name="first_club" id="first_club">
												<div class="input-group-append">
													<button class="btn btn-success btn-update" type="button"><i class='fa fa-pencil-square-o fa-lg fa-fw'></i>Update</button>
													<button class="btn btn-danger cancelBtn" type="button"><i class='fa fa-remove fa-lg fa-fw'></i></button>
												</div>
											</div>
										</td>
									</tr>
									<tr>
										<td>Second Club</td>
										<td class="">
											<div class="">
												<?php echo $_SESSION['second_club']?>
											</div>

											<div class="input-group mb-3">
												<input value="" type="text" class="form-control" placeholder="" aria-label="ID" aria-describedby="basic-addon2"
												 name="second_club" id="second_club">
												<div class="input-group-append">
													<button class="btn btn-success btn-update" type="button"><i class='fa fa-pencil-square-o fa-lg fa-fw'></i>Update</button>
													<button class="btn btn-danger cancelBtn" type="button"><i class='fa fa-remove fa-lg fa-fw'></i></button>
												</div>
											</div>
										</td>
									</tr>
									<tr>
										<td>Third Club</td>
										<td class="">
											<div class="">
												<?php echo $_SESSION['third_club']?>
											</div>

											<div class="input-group mb-3">
												<input value="" type="text" class="form-control" placeholder="" aria-label="ID" aria-describedby="basic-addon2"
												 name="third_club" id="third_club">
												<div class="input-group-append">
													<button class="btn btn-success btn-update" type="button"><i class='fa fa-pencil-square-o fa-lg fa-fw'></i>Update</button>
													<button class="btn btn-danger cancelBtn" type="button"><i class='fa fa-remove fa-lg fa-fw'></i></button>
												</div>
											</div>
										</td>
									</tr>
									<tr>
										<td>Total CCA hours</td>
										<td class="">
											<div class="">
												<?php echo $_SESSION['total_cca']?>
											</div>

											<div class="input-group mb-3">
												<input value="" type="text" class="form-control" placeholder="" aria-label="ID" aria-describedby="basic-addon2"
												 name="total_cca" id="total_cca">
												<div class="input-group-append">
													<button class="btn btn-success btn-update" type="button"><i class='fa fa-pencil-square-o fa-lg fa-fw'></i>Update</button>
													<button class="btn btn-danger cancelBtn" type="button"><i class='fa fa-remove fa-lg fa-fw'></i></button>
												</div>
											</div>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
			<div id="menu2" class="container tab-pane fade"><br>
				<h3>Menu 2</h3>
				<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem
					aperiam.</p>
			</div>
		</div>
	</div>

</body>
<style>
	/* The container */
	.radio-container {
		display: block;
		position: relative;
		padding-left: 35px;
		margin-bottom: 12px;
		cursor: pointer;
		font-size: 22px;
		-webkit-user-select: none;
		-moz-user-select: none;
		-ms-user-select: none;
		user-select: none;
	}

	/* Hide the browser's default radio button */
	.radio-container input {
		position: absolute;
		opacity: 0;
		cursor: pointer;
	}

	/* Create a custom radio button */
	.checkmark {
		position: absolute;
		top: 0;
		left: 0;
		height: 25px;
		width: 25px;
		background-color: #eee;
		border-radius: 50%;
	}

	/* On mouse-over, add a grey background color */
	.radio-container:hover input~.checkmark {
		background-color: #ccc;
	}

	/* When the radio button is checked, add a blue background */
	.radio-container input:checked~.checkmark {
		background-color: #2196F3;
	}

	/* Create the indicator (the dot/circle - hidden when not checked) */
	.checkmark:after {
		content: "";
		position: absolute;
		display: none;
	}

	/* Show the indicator (dot/circle) when checked */
	.radio-container input:checked~.checkmark:after {
		display: block;
	}

	/* Style the indicator (dot/circle) */
	.radio-container .checkmark:after {
		top: 9px;
		left: 9px;
		width: 8px;
		height: 8px;
		border-radius: 50%;
		background: white;
	}
</style>

<body>

	<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha384-tsQFqpEReu7ZLhBV2VZlAu7zcOV+rXbYlF2cqB8txI/8aZajjp4Bqd+V6D5IgvKT"
	 crossorigin="anonymous"></script>
	<script src="src/js/dashboard.js"></script>
	<!-- Load jQuery -->
	<!--<script src="vendor/node_modules/initjQuery.js"></script>-->
	<!-- script for edit the form -->

	<script>

	</script>
</body>

</html>