<div class="content playCountAll" id="playCountAll">


    <?php
    $q = "SELECT userID,
    COUNT(historytable.trackID) as playCount,
    trackstable.trackName as trackName,
    trackstable.trackIMG as trackImage,
    historytable.trackID as trackID
    FROM spotifydb.historytable
    INNER JOIN trackstable
    ON historytable.trackID = trackstable.trackID
    GROUP BY userID, trackstable.trackName, trackstable.trackIMG, trackstable.trackID
    HAVING userID = $userID
    ORDER BY playCount DESC;";

    $result = mysqli_query($dbcon, $q);

    if ($result) {
        echo '<table><tr class="tablehead">
        <td><b>Song</b></td>
        <td><b>Play Count</b></td>
        </tr>';

        $counter = 1;

        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            $arrowColor = ($row['playCount'] > 5) ? 'green' : 'red'; // Change arrow color based on playCount
            echo '<tr><td class="d-flex px-3 align-items-center text-center">' . '<span style="font-size:20px; width: 10px; display: inline-block;"><p style="display: inline; font-size:20px;">#</p>' . $counter . '<span class="arrow" style="color: ' . $arrowColor . ';">' . getArrow($arrowColor) . '</span> ' . '</span> <img src="' . $row['trackImage'] . '" class="playButton spotify-thumbnail  trackimg" data-spotify-id="spotify:track:' . $row['trackID'] . '"> <p class="text-justify mx-auto" style="font-size: 1rem">&nbsp&nbsp' . $row['trackName'] . '</p></td>';
            echo '<td>' . $row['playCount'] . '</td></tr>';

            $counter++;
        }
        echo '</table>';
        mysqli_free_result($result);
    } else {
        echo '<p class="error"> The current users could not be retrieved due to an unknown error. We apologize</p>
        <img src="https://cdn.7tv.app/emote/60abf171870d317bef23d399/4x.webp"></img>';
        echo '<p>' . mysqli_error($dbcon) . '</p>';
    }
    function getArrow($color)
    {
        return ($color == 'green') ? '↑' : '↓'; // If green, upward arrow; if red, downward arrow
    }

    ?>

</div>



<style>
    .playCountAll {
        display: block;
    }

    .spotify-thumbnail {
        width: 60px;
        height: 60px;
        object-fit: cover;
        margin-left: 60px;
    }

    td {
        padding: 5px;
    }

    .arrow {
        font-size: 24px;
        font-weight: bold;
        margin-left: 5px;
    }

    .liked-songs-count {
        display: flex;
        align-items: flex-start;

    }

    .liked-songs-text {
        font-size: 15px;
        color: gray;
        margin-right: 7px;
        margin-left: 30px;
        /* Adjusted margin-left */
    }

    .liked-songs-number {
        font-size: 16px;
        font-weight: bold;
    }
</style>