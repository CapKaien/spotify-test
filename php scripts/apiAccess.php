<?php
    require 'vendor/autoload.php';
    require('mysqli_connect.php');

    $api = new SpotifyWebAPI\SpotifyWebAPI();

    // Fetch the saved access token from somewhere. A session for example.
    $api->setAccessToken($_SESSION['accesstoken']);
?>