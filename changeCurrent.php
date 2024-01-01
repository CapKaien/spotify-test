<?php
    session_start();
    require('php scripts/apiAccess.php');

    if (isset($_POST['trackID'])) {
        changeCurrent($_POST['trackID'], $api);
    
    }

    function changeCurrent($trackID, $api){
        $track = $api->getTrack($trackID);
        $trackName = $track->name;
        $trackArtist = $track->artists[0]->name;
        $trackImage = $track->album->images[0]->url;
        echo '<h2>Your Current Track</h2>';
        echo '<img src="' . $trackImage . '"> <br />' . '<p>' . $trackName . ' <br /> ' . $trackArtist . '</p> <br>';
    }

?>