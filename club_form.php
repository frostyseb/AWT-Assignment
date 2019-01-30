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
    <body>
        <form name="club_form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
            <input type="hidden" name="club" value="SET">
            Club Name:
            <input type="text" name="cname" placeholder="Insert club name.">
            <br><br>
            Club ID:
            <input type="text" name="cid" placeholder="Insert club ID.">
            <br><br>
            <input type="submit" value="Enter">
        </form>
    </body>
</html>