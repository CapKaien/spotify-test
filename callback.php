<?php
session_start();
require 'vendor/autoload.php';

$session = new SpotifyWebAPI\Session(
    'cb68a3bc658d464292155c682b035118',
    '04addac5dc764eefb57defa54dc0bb21',
    'http://localhost/spotify-test/callback.php'
);

$state = $_GET['state'];

// Fetch the stored state value from somewhere. A session for example

if ($state !== $_SESSION["storedstate"]) {
    // The state returned isn't the same as the one we've stored, we shouldn't continue
    die('State mismatch');
}


// Request a access token using the code from Spotify
$session->requestAccessToken($_GET['code']);

$_SESSION["accesstoken"] = $session->getAccessToken();
$_SESSION["refreshToken"] = $session->getRefreshToken();

// Store the access and refresh tokens somewhere. In a session for example

// Send the user along and fetch some data!
header('Location: dashboard.php');
die();
?>