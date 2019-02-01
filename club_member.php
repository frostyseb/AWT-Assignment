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
	
	<script src="src/js/validateClub.js"></script>
	
</head>

<?php include 'simpleNav.php';?>

<body>

    <div class="container">
        <div class="row">
        <form  action ="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method = "POST" id = "club_member">
        <input type="hidden" name="club_member" value = "SET">
        <label for="student_id">Student ID:
            <input type="text" name="student_id" id="student_id">
         </label>
         <label for="club_id">club ID:
            <select name="club_id" id="club_id">
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
         </label>
         <button type="submit" form="club_member" value ="submit">Submit</button>
        </form>
        </div>
    </div>  

    <div class="container">
            <div class="row">
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" id="member_list">
                <input type="hidden" name="member_list" value = "SET">
                <select name="club_id" id="club_id">
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
                <button type="submit" form = "member_list">Submit</button>
            </form>
            </div>
    </div>
    
</body>
</html>