<?php
    session_start();

    include_once 'includes/Dbh.inc.php';
    include_once 'includes/user.inc.php';
    include_once 'includes/club_member.inc.php';

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        if(isset($_POST["club_member"])){

            $dataArray = array(
                'student_id' => $_POST['student_id'],
                'club_id' => $_POST['club_id']
            );

            $club_member = new ClubMember;
            $club_member->checkClubMember($dataArray);
        }
    }
    

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Club Member</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="" />
    <script src=""></script>
</head>
<body>

    <div class="container">
        <div class="row">
        <form action ="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method = "POST" id = "club_member">
        <input type="hidden" name="club_member" value = "SET">
        <label for="student_id">Student ID:
            <input type="text" name="student_id" id="student_id">
         </label>
         <label for="club_id">club ID:
            <input type="text" name="club_id" id="club_id">
         </label>
         <button type="submit" value ="submit">Submit</button>
        </form>
        </div>
    </div>  
    
</body>
</html>