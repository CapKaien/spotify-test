<div class="content">

    <?php

    $q = "SELECT userID,
    COUNT(historytable.trackID) as playCount,
    trackstable.trackName as trackName,
    trackstable.trackIMG as trackImage,
    trackstable.trackID as trackID
    FROM spotifydb.historytable
    INNER JOIN trackstable
    ON historytable.trackID = trackstable.trackID
    GROUP BY userID, trackstable.trackName, trackstable.trackIMG, trackstable.trackID
    HAVING userID = $userID
    ORDER BY playCount DESC
    LIMIT 100;";

    $result = mysqli_query($dbcon, $q);

    if ($result) {
        echo '<table><tr class="tablehead">
        <h2 class="title"><b>Top Hits</b></h2>
        </tr>';

        $counter = 1;

        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            echo '<tr><td class="track-container d-flex px-3 align-items-center text-center">
            <span style="font-size:30px; width: 10px; "><p style="display: inline; font-size:20p">#</p>' . $counter . '</span> <img src="' . $row['trackImage'] .
                '" class="playButton spotify-thumbnail  trackimg" data-spotify-id="spotify:track:' . $row['trackID'] .
                '"> <p class="text-justify mx-auto" style="font-size: 1rem">' .
                $row['trackName'] . '</p>
                </td></tr>';

            $counter++;
        }

        echo '</table>';
        mysqli_free_result($result);
    } else {
        echo '<p class="error"> The current users could not be retrieved due to an unknown error. We apologize</p>
        <img src="https://cdn.7tv.app/emote/60abf171870d317bef23d399/4x.webp"></img>';
        echo '<p>' . mysqli_error($dbcon) . '</p>';
    }
    ?>

</div>

<style>
    .spotify-thumbnail {
        width: 60px;
        /* Adjust the width to the desired size for your thumbnails */
        height: 60px;
        /* Adjust the height to maintain the aspect ratio */
        object-fit: cover;
        /* This property ensures the image covers the container while maintaining its aspect ratio */
        margin-left: 60px;
    }

    td {
        padding: 5px;
    }

    .track-container::-webkit-scrollbar {
        width: 10px;
    }

    .track-container::-webkit-scrollbar-thumb {
        background-color: #3B3F4E;
        /* Green color for the scroll thumb */
        border-radius: 5px;
        /* Border radius of 5 */
    }

    .track-container::-webkit-scrollbar-track {
        background: transparent;
        /* No background color for the scrollbar track */
    }
</style>