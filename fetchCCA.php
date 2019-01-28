<?php
    include_once 'includes/Dbh.inc.php';
    include_once 'includes/cca.inc.php';

    session_start();

    if(!$_SESSION['id']){
        header ("Location: login.php");
    }
    else{
        fetchData();
    }

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