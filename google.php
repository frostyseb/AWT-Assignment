<?php require ("vendor/autoload.php");
//Step 1: Enter you google account credentials

$g_client = new Google_Client();

$g_client->setClientId("333818657363-h92hbp9kkm5h3onnqqklhjnqt1pna3g9.apps.googleusercontent.com");
$g_client->setClientSecret("K9hee3gITqI29iHVfZEAH8et");
$g_client->setRedirectUri("http://localhost/sign_in/google.php");
$g_client->setScopes("email");

//Step 2 : Create the url
$auth_url = $g_client->createAuthUrl();
echo "<a href='$auth_url'>Login Through Google </a>";

//Step 3 : Get the authorization  code
$code = isset($_GET['code']) ? $_GET['code'] : NULL;

//Step 4: Get access token
if(isset($code)) {

    try {

        $token = $g_client->fetchAccessTokenWithAuthCode($code);
        $g_client->setAccessToken($token);

    }catch (Exception $e){
        echo $e->getMessage();
    }




    try {
        $pay_load = $g_client->verifyIdToken();


    }catch (Exception $e) {
        echo $e->getMessage();
    }

} else{
    $pay_load = null;
}

if(isset($pay_load)){


    

}
