<?php
    require_once "config.php";
    include_once 'includes/Dbh.inc.php';
    include_once 'includes/user.inc.php';
    include_once 'includes/cca.inc.php';

    if(isset($_SESSION['access_token']))
        $gClient->setAccessToken($_SESSION['access_token']);

    else if(isset($_GET['code'])){
        $token = $gClient->fetchAccessTokenWithAuthCode($_GET['code']);
		$_SESSION['access_token'] = $token;
    }
    else{
        header('Location: login.php');
        exit();
    }

    $oAuth = new Google_Service_Oauth2($gClient);
    //Get user profile data from google
	$userData = $oAuth->userinfo_v2_me->get();

	echo "<pre>";
    //var_dump($userData);

    

	//Insert or update user data to the database
    $userDataArray = array(
        'oProvider'=> 'google',
        'oUid'     => $userData['id'],
        'fName'    => $userData['givenName'],
        'lName'     => $userData['familyName'],
        'email'         => $userData['email'],
        'locale'        => $userData['locale'],
        'picture'       => $userData['picture']
    );
    
    $user = new User;
    $finalUserData = $user->checkUser($userDataArray);
    $user->fetchUser();
    echo "
    =================================================
    ";
    var_dump($_SESSION);

    if(!$_SESSION['id']){
        header ("Location: login.php");
    }
    else{
        fetchData();
    }

    function fetchData(){
        $ccaData = new Cca;
        $ccaData->fetchCca();
        
    }

    header('Location: index.php');
    exit();

?>