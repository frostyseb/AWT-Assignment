<?php
    session_start();

    include_once 'includes/Dbh.inc.php';
    include_once 'includes/user.inc.php';
    include_once 'includes\club_member.inc.php';

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        if(isset($_POST["club_member"])){
            $club_member = new ClubMember;
            $dataArray = array(
                'student_id' => $_POST['student_id'],
                'club_id' => $_POST['club_id']
            );            
            $club_member->checkClubMember($dataArray);
        }
        else if(isset($_POST['member_list'])){
            $club_member = new ClubMember;
            $rowCount = 0;
            $memberDataArray =  $club_member->fetchByClub($_POST['club_id']);
            echo "<h1> Club id : " . $_POST['club_id'] . "</h1>";
            if(isset($memberDataArray)){
                echo "<ol>";
                foreach($memberDataArray as $member){
                    echo "<li>".$member. "</li>";
                    $rowCount++;
                }
                echo "</ol>";
                echo "Total member:".$rowCount;
            }
            else{
                echo "<br>No data";
            }
        }
    }
    

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	
    <title>Club Member</title>
	
    <!--Bootstrap js-->
	<?php include 'includes/bootstrapH.inc.php'; ?>
	
	<!--Title Bar Icon-->
	<link rel="icon" type="image/ico" href="src/assets/quest_logo.png">
	
	<!--Google font style-->
	<link href="https://fonts.googleapis.com/css?family=KoHo" rel="stylesheet">
	
	<!--CSS Stylesheets-->
	<link rel="stylesheet" href="src/css/styles_club_form.css" type="text/css">
	
	<script src="src/js/validateClubMem.js"></script>
	<script src="src/js/validateMemList.js"></script>
	
</head>

<?php include 'simpleNav.php';?>

<body>

    <div class="container">
        <div class="row">
        <form  action ="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method = "POST" name = "club_member" id = "club_member" onsubmit="return validateClubMem()">
			<input type="hidden" name="club_member" value = "SET">
			<h2>Club Member Registration</h2>
			<br>
			<label for="student_id">Student ID:</label>
				<input type="text" name="student_id" id="student_id" placeholder="Insert student ID."> 
			 <br><br>
			 <label for="club_id">Club ID:</label><br>
				<select name="club_id" id="club_id1">
					<option value="0" selected>--Please select one--</option>
					<option value="QIUPC001">Music Club</option>
					<option value="QIUPC002">Debate Club</option>
					<option value="QIUPC003">Q-Care Club</option>
					<option value="QIUPC004">Innovation Club</option>
					<option value="QIUPC005">Photography Club</option>
					<option value="QIUPC006">Biotech Club</option>
					<option value="QIUPC007">International Students Club</option>
					<option value="QIUPC008">Human Resource Club</option>
					<option value="QIUPC009">Student Representative Council</option>
					<option value="QIUPC010">Pharmacy Students Society</option>
					<option value="QIUPC011">Hindu Society</option>
					<option value="QIUPC012">Christian Society</option>	
					<option value="QIUPC013">Sikh Society</option>
					<option value="QIUPC014">Chinese Society</option>
					<option value="QIUPC015">Muslim Society</option>
					<option value="QIUPC016">International Commerce Club</option>
					<option value="QIUPC017">Cricket Club</option>
					<option value="QIUPC018">Badminton Club</option>
					<option value="QIUPC019">Futsal &amp; Football Club</option>
					<option value="QIUPC020">Basketball Club</option>
					<option value="QIUPC021">Gamers Club</option>
					<option value="QIUPC022">Indoor Club</option>
					<option value="QIUPC023">Outdoor Club</option>
				</select>
			 <br><br>
			 <button type="submit" form="club_member" value ="submit" class="cmSubmit">Submit</button>
        </form>
        </div>
    </div>  

	<hr>
	
    <div class="container">
            <div class="row">
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" name="member_list" id="member_list" onsubmit="return validateMemList()">
					<input type="hidden" name="member_list" value = "SET">
					<br>
					<h2>Member List</h2>
					<br>
					<select name="club_id" id="club_id2">
						<option value="0" selected>--Please select one--</option>
						<option value="QIUPC001">Music Club</option>
						<option value="QIUPC002">Debate Club</option>
						<option value="QIUPC003">Q-Care Club</option>
						<option value="QIUPC004">Innovation Club</option>
						<option value="QIUPC005">Photography Club</option>
						<option value="QIUPC006">Biotech Club</option>
						<option value="QIUPC007">International Students Club</option>
						<option value="QIUPC008">Human Resource Club</option>
						<option value="QIUPC009">Student Representative Council</option>
						<option value="QIUPC010">Pharmacy Students Society</option>
						<option value="QIUPC011">Hindu Society</option>
						<option value="QIUPC012">Christian Society</option>	
						<option value="QIUPC013">Sikh Society</option>
						<option value="QIUPC014">Chinese Society</option>
						<option value="QIUPC015">Muslim Society</option>
						<option value="QIUPC016">International Commerce Club</option>
						<option value="QIUPC017">Cricket Club</option>
						<option value="QIUPC018">Badminton Club</option>
						<option value="QIUPC019">Futsal &amp; Football Club</option>
						<option value="QIUPC020">Basketball Club</option>
						<option value="QIUPC021">Gamers Club</option>
						<option value="QIUPC022">Indoor Club</option>
						<option value="QIUPC023">Outdoor Club</option>
					</select>
					<br><br>
					<button type="submit" form = "member_list" class="cmSubmit">Submit</button>
            </form>
            </div>
    </div>
    
</body>
</html>