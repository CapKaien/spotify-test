<div class="content">
    <h2 class="title"><b>Recommendations</b></h2>

    <?php
    $q = "SELECT tempTable.userID,
        trackstable.trackID as trackID
        FROM (SELECT * FROM historytable
        WHERE userID = $userID
        ORDER BY historytable.datePlayed DESC
        LIMIT 5) AS tempTable
        INNER JOIN trackstable
        ON tempTable.trackID = trackstable.trackID
        ORDER BY tempTable.datePlayed DESC;";

    $result = mysqli_query($dbcon, $q);

    if ($result) {
        echo '<div class="grid-container">';
        $trackSeeds = array();
        $counterLimit = 1;
        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            array_push($trackSeeds, $row['trackID']);
            $counterLimit++;
        }

        $recommendations = $api->getRecommendations([
            'limit' => 10,
            'seed_tracks' => $trackSeeds
        ]);

        foreach ($recommendations->tracks as $track) {
            $trackID = $track->id;
            $trackName = $track->name;
            $trackPic = $track->album->images[0]->url;
            $artistName = $track->artists[0]->name;

            echo '<div class="grid-item">
                   
                    <img src="' . $trackPic . '" class=" recom-img playButton  object-fit-contain trackimg" alt="Artist has no pfp"
                    data-spotify-id="spotify:track:' . $trackID . '">
                    <p class="text-justify mx-auto" style="font-size: 1rem; margin-top:10px; font-weight: bold;">' . $artistName . '  </p>
                    <p class="text-justify mx-auto" style="font-size: 1rem; margin-top:10px;">' . $trackName . '</p>
                  </div>';
        }

        echo '</div>';
    } else {
        echo '<p class="error"> Recommendations could not be retrieved due to an unknown error. We apologize</p>';
        echo '<p>' . mysqli_error($dbcon) . '</p>';
    }
    ?>
</div>

<style>
    .recom-img {
        width: 65%;
        height: 150px;
        object-fit: cover;
        border: 0;
        border-radius: 50%;
    }
</style>