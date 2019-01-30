<?php
    include_once 'includes/Dbh.inc.php';
    include_once 'includes/cca.inc.php';
    include_once 'includes/club.inc.php';
    include_once 'includes/club_member.inc.php';
    include_once 'includes/user.inc.php';

    session_start();

    if(!$_SESSION['id']){
        header ("Location: login.php");
    }
    else{
        fetchData();
    }
    $users = new User;
    $stmt = $users->connect()->prepare("SELECT club_id FROM users,club_member WHERE gender='F'");
    $stmt->execute();
    var_dump($stmt->rowCount());

    function fetchData(){
        $ccaData = new Cca;
        $ccaData->fetchCca();
        dumpSession();
        
    }

    function dumpSession(){
        echo "<pre>";
        var_dump($_SESSION);
        echo "</pre>";
    }