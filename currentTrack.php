<div class="info">
    <?php
    //Get the currently playing track
    echo '<h2>Your Current Track</h2>';

    try {
        $currentTrack = $api->getMyCurrentTrack();
        echo '<img src="' . $currentTrack->item->album->images[0]->url . '"> <br />' . '<p>' . $currentTrack->item->name . ' <br /> ' . $currentTrack->item->artists[0]->name . '</p> <br>';
    } catch (TypeError $ex) {
        echo '<p>no song currently playing</p><br />';
    };


    ?>
</div>