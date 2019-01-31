<?php
    session_start();

    include_once "includes/Dbh.inc.php";
    include_once "includes/club.inc.php";

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        if(isset($_POST["club"])){
            $dataArray = array(
                "cname" => $_POST["cname"],
                "cid" => $_POST["cid"]
            );

            $club = new Club;
            $club->checkClub($dataArray);
        }
    }
?>
<html>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	
	<title>Club Form</title>
	
	<!--Bootstrap js-->
	<?php include 'includes/bootstrapH.inc.php'; ?>
	
	<!--Title Bar Icon-->
	<link rel="icon" type="image/ico" href="src/assets/quest_logo.png">
	
	<!--Google font style-->
	<link href="https://fonts.googleapis.com/css?family=KoHo" rel="stylesheet">
	
	<!--CSS Stylesheets-->
	<link rel="stylesheet" href="src/css/styles_club_form.css" type="text/css">
	
	<script src="src/js/validateClub.js"></script>
	
</head>

<?php include 'simpleNav.php';?>

<body>
	<form name="club_form" id="club_form" onsubmit="return validateClub()" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
		<input type="hidden" name="club" value="SET">
		<label for="cname">Club Name:</label>
		<input type="text" name="cname" id="cname" placeholder="Insert club name.">
		<br><br>
		<label for="cid">Club ID:</label>
		<input type="text" name="cid" id="cid" placeholder="Insert club ID.">
		<br><br>
		<input type="submit" value="Enter" id="clubSubmit" form="club_form">
	</form>
</body>
</html>