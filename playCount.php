<div class="content">
    <h2 class="title"><b>Favorite Songs</b></h2>
    <?php

    $q = "SELECT userID,
    COUNT(historytable.trackID) as playCount,
    trackstable.trackName as trackName,
    trackstable.trackIMG as trackImage,
    trackstable.trackID as trackID
    FROM spotifydb.historytable
    INNER JOIN trackstable
    ON historytable.trackID = trackstable.trackID
    GROUP BY userID, trackstable.trackName, trackstable.trackIMG
    HAVING userID = $userID
    ORDER BY playCount DESC
    LIMIT 50;";

    $result = mysqli_query($dbcon, $q);

    if ($result) {
        echo '<table><tr class="tablehead">
        <th>Rank</th>
        <th>Play Count</th>
        </tr>';

        $counter = 1;

        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            $arrowColor = ($row['playCount'] > 5) ? 'green' : 'red'; // Change arrow color based on playCount
            echo '<tr><td class="d-flex px-3 align-items-center text-center"><span style="font-size:30px; width: 10px">' . $counter . '</span> <img src="' . $row['trackImage'] . '" class="playButton spotify-thumbnail  trackimg" data-spotify-id="spotify:track:' . $row['trackID'] . '"> <p class="text-justify mx-auto" style="font-size: 1rem">' . $row['trackName'] . '</p></td>';
            echo '<td><span class="arrow" style="color: ' . $arrowColor . ';">' . getArrow($arrowColor) . '</span> ' . $row['playCount'] . '</td></tr>';
            $counter++;
        }
        echo '</table>';
        mysqli_free_result($result);
    } else {
        echo '<p class="error"> The current users could not be retrieved due to an unknown error. We apologize</p>
        <img src="https://cdn.7tv.app/emote/60abf171870d317bef23d399/4x.webp"></img>';
        echo '<p>' . mysqli_error($dbcon) . '</p>';
    }

    function getArrow($color) {
        return ($color == 'green') ? '↑' : '↓'; // If green, upward arrow; if red, downward arrow
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
        margin-left: 50px;
    }

    td {
        padding: 5px;
    }

    .arrow {
        font-size: 24px; /* Adjust the font size as needed */
        font-weight: bold; /* Adjust the font weight as needed */
    }
</style>
