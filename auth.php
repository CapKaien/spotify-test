<?php
session_start();
require 'vendor/autoload.php';

$session = new SpotifyWebAPI\Session(
    'cb68a3bc658d464292155c682b035118',
    '04addac5dc764eefb57defa54dc0bb21',
    'http://localhost/spotify-test/callback.php' //change to spotify-test 
);

$state = $session->generateState();
$options = [
    'scope' => [
        'playlist-read-private',
        'user-read-private',
        'user-read-email',
        'user-library-read',
        'user-read-recently-played',
        'user-top-read',
        'user-read-currently-playing',
        'user-modify-playback-state',
        'user-read-playback-state',
    ],
    'state' => $state,
    'show_dialog' => true
];

$_SESSION["storedstate"] = $state;

header('Location: ' . $session->getAuthorizeUrl($options));
die();
