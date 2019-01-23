<?php

    session_start();
    require_once "API/GoogleAPI/vendor/autoload.php";

    $clientId = "333818657363-h92hbp9kkm5h3onnqqklhjnqt1pna3g9.apps.googleusercontent.com";
    $clientSecret = "K9hee3gITqI29iHVfZEAH8et";
    $redirectURL = "http://localhost/AWT/AWT-Assignment/g-callback.php";

    $gClient = new Google_Client();
    $gClient->setClientId($clientId);
    $gClient->setClientSecret($clientSecret);
    $gClient->setApplicationName("CCA Login");
    $gClient->setRedirectUri($redirectURL);
    $gClient->addScope("https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/userinfo.email ");
?>