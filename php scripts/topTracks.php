<div class="content">
    <?php
    //Get the user's top tracks
    echo '<h2>Your Top Tracks</h2>';
    $topTracks = $api->getMyTop('tracks', ['time_range' => 'short_term', 'limit' => 10]);
    foreach ($topTracks->items as $track) {
        echo '<b>' . $track->name . ' - ' . $track->artists[0]->name . '</b> <br>';
    }
    ?>
</div>