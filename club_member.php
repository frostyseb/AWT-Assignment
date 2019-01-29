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
        <form  action ="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method = "POST" id = "club_member">
        <input type="hidden" name="club_member" value = "SET">
        <label for="student_id">Student ID:
            <input type="text" name="student_id" id="student_id">
         </label>
         <label for="club_id">club ID:
            <select name="club_id" id="club_id">
                <option value="QIUPC001">Quest Photography Club</option>
                <option value="QIUPC002">Music Club</option>
                <option value="QIUPC003">Debate Club</option>
                <option value="QIUPC004">Care Club</option>
                <option value="QIUPC005">Innovation Club</option>
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
                    <option value="QIUPC001">Quest Photography Club</option>
                    <option value="QIUPC002">Music Club</option>
                    <option value="QIUPC003">Debate Club</option>
                    <option value="QIUPC004">Care Club</option>
                    <option value="QIUPC005">Innovation Club</option>
                </select>
                <button type="submit" form = "member_list">Submit</button>
            </form>
            </div>
    </div>
    
</body>
</html>