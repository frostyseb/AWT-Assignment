<?php

    session_start();
    require_once "API/GoogleAPI/vendor/autoload.php";
    $gClient = new Google_Client();
    $gClient->setClientId("333818657363-h92hbp9kkm5h3onnqqklhjnqt1pna3g9.apps.googleusercontent.com");
    $gClient->setClientSecret("333818657363-h92hbp9kkm5h3onnqqklhjnqt1pna3g9.apps.googleusercontent.com");
    $gClient->setApplicationName("CCA Login");
    $gClient->setRedirectUri("http://localhost/AWT/AWT-Assignment/g-callback.php");
    $gClient->addScope("https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/userinfo.email ");
?>