<?php
    require_once "config.php";

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
    var_dump($userData);

    

	//Insert or update user data to the database
    $userDataArray = array(
        'oauth_provider'=> 'google',
        'oauth_uid'     => $gpUserProfile['id'],
        'first_name'    => $gpUserProfile['given_name'],
        'last_name'     => $gpUserProfile['family_name'],
        'email'         => $gpUserProfile['email'],
        'gender'        => $gpUserProfile['gender'],
        'locale'        => $gpUserProfile['locale'],
        'picture'       => $gpUserProfile['picture'],
        'link'          => $gpUserProfile['link']
    );

    $user = new Users();
    $finalUserData = $user->checkUser($userDataArray);
    
   /* $_SESSION['id'] = $userData['id'];
    $_SESSION['email'] = $userData['email'];
    $_SESSION['gender'] = $userData['gender'];
    $_SESSION['picture'] = $userData['picture'];
    $_SESSION['familyName'] = $userData['familyName'];
    $_SESSION['givenName'] = $userData['givenName'];*/

    //header('Location: index.php');
    //exit();

?>