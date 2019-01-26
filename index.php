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

	$userDataArray = array(
        'oProvider'=> 'google',
        'oUid'     => $id,
        'fName'    => $givenName,
        'lName'     => $familyName,
        'email'         => $email,
        'gender'        => $gender = $_POST["gender"],
        'locale'        => 'en',
		'picture'       => $_SESSION['picture']

	);
	
	$user = new User;
	$finalUserData = $user->checkUser($userDataArray);
	$user->fetchUser();

    header('Location: '.$_SERVER['REQUEST_URI']);
}

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
	  <link rel="stylesheet" type="text/css" 
	  href="//fonts.googleapis.com/css?family=Raleway:400,800" />
	<!-- Font awesome bootstrap-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
	 integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" 
	 crossorigin="anonymous">
	<!-- Bootstrap CSS and JS-->
	<link rel="stylesheet" href="vendor/node_modules/bootstrap/dist/css/bootstrap.css">
    <script src="vendor/node_modules/bootstrap/dist/js/bootstrap.js"></script>
</head>
<?php include 'simpleNav.php';?>
<body>
	<div class="container" style ="margin-top:100px;">
		<div class="row">
			<div class="col-md-3">
				<img style="width:80%;" src="<?php echo $_SESSION['picture']?>">
			</div>
			<div class="col-md-9">
				<table class="table table-hover table-bordered">
					<tbody>
					<form action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method = "POST" id = "updateUser">
						<tr>
							<td>ID</td>
							<td class = "">
								<div class="">
									<?php echo $_SESSION['id']?>
									<i class='fa fa-lg fa-fw'></i>
								</div>

								<div class="input-group mb-3">
									<input type="text" value = "<?php echo $_SESSION['id']?>" class="form-control" placeholder="" aria-label="ID" aria-describedby="basic-addon2" name ="id" id ="id">
									<div class="input-group-append">
										<button class="btn btn-success btn-update" type="button"><i class='fa fa-pencil-square-o fa-lg fa-fw'></i>Update</button>
										<button class="btn btn-danger cancelBtn" type="button"><i class='fa fa-remove fa-lg fa-fw'></i></button>
									</div>
								</div>

							</td>
						</tr>
						<tr>
							<td>First Name</td>
							<td class =  "table-col">
								<div class="info">
									<?php echo $_SESSION['givenName']?>
									<i class='fa fa-pencil-square-o fa-lg fa-fw'></i>
								</div>
								<div class="input-group mb-3">
									<input type="text" class="form-control" placeholder="" aria-label="ID" aria-describedby="basic-addon2" name ="givenName" id ="givenName">
									<div class="input-group-append">
										<button class="btn btn-success btn-update" type="button"><i class='fa fa-pencil-square-o fa-lg fa-fw'></i>Update</button>
										<button class="btn btn-danger cancelBtn" type="button"><i class='fa fa-remove fa-lg fa-fw'></i></button>
									</div>
								</div>
							</td>
						</tr>
						<tr>
							<td>Last Name</td>
							<td class = "table-col">
								<div class="info">
									<?php echo $_SESSION['familyName']?>
									<i class='fa fa-pencil-square-o fa-lg fa-fw'></i>
								</div>

								<div class="input-group mb-3">
									<input type="text" class="form-control" placeholder="" aria-label="ID" aria-describedby="basic-addon2" name ="familyName" id ="familyName">
									<div class="input-group-append">
										<button class="btn btn-success btn-update" type="button"><i class='fa fa-pencil-square-o fa-lg fa-fw'></i>Update</button>
										<button class="btn btn-danger cancelBtn" type="button"><i class='fa fa-remove fa-lg fa-fw'></i></button>
									</div>
								</div>
							</td>
						</tr>
						<tr>
							<td>Email</td>
							<td class = "table-col">
								<div class="info">
									<?php echo $_SESSION['email']?>
									<i class='fa fa-pencil-square-o fa-lg fa-fw'></i>
								</div>
								
								<div class="input-group mb-3">
									<input type="text" class="form-control" placeholder="" aria-label="ID" aria-describedby="basic-addon2" name ="email" id ="email">
									<div class="input-group-append">
										<button class="btn btn-success btn-update" type="button"><i class='fa fa-pencil-square-o fa-lg fa-fw'></i>Update</button>
										<button class="btn btn-danger cancelBtn" type="button"><i class='fa fa-remove fa-lg fa-fw'></i></button>
									</div>
								</div>
							</td>
						</tr>
						<tr>
							<td>Gender</td>
							<td class = "table-col">
								<div class="info">
									<?php echo $_SESSION['gender']?>
									<i class='fa fa-pencil-square-o fa-lg fa-fw'></i>
								</div>
								<div class="input-group mb-3">
									<input type="text" class="form-control" placeholder="" aria-label="ID" aria-describedby="basic-addon2" name ="gender" id ="gender">
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
                    				<a id="logoutBtn" class="btn btn-success" href="#" 
									onclick="document.getElementById('logoutF').submit();">
									<i class="fa fa-sign-out fa-lg fa-fw" id ="logout-fa"></i><div style ="Display:inline;">Logout</div></a>
               					 </form>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</body>

<body>
	
	<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha384-tsQFqpEReu7ZLhBV2VZlAu7zcOV+rXbYlF2cqB8txI/8aZajjp4Bqd+V6D5IgvKT" crossorigin="anonymous"></script>
	<script src="src/js/dashboard.js"></script>
    <!-- Load jQuery --> 
	<!--<script src="vendor/node_modules/initjQuery.js"></script>-->
	<!-- script for edit the form -->
	
<script>

</script>
</body>
</html>