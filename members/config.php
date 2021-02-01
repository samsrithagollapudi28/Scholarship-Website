<?php

//start session on web page
session_start();

//config.php

//Include Google Client Library for PHP autoload file
require_once 'vendor/autoload.php';

//Make object of Google API Client for call Google API
$google_client = new Google_Client();

//Set the OAuth 2.0 Client ID
$google_client->setClientId('770807748358-rrkllil3v5i95sf5ba0dj0k2rq0cvscv.apps.googleusercontent.com');

//Set the OAuth 2.0 Client Secret key
$google_client->setClientSecret('nLjC2N34DM7tHdwQ7-0Bvc3M');

//Set the OAuth 2.0 Redirect URI
$google_client->setRedirectUri('http://localhost/members/signupapp.php');

// to get the email and profile 
$google_client->addScope('email');

$google_client->addScope('profile');

?>