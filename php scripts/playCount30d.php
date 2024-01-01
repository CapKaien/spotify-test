<div class="content playThirty" id="playThirty">
    <?php include("php scripts/likedSongsCount.php"); ?>
    <div class="liked-songs-count">
        <p class="liked-songs-text">Liked Songs:</p>
        <p class="liked-songs-number" style="color: green;"><?php echo $totalLikedSongs; ?></p>
    </div>
    <?php
    //For past 7 days
    $q = "SELECT userID,
    COUNT(tempTable.trackID) as playCount,
    temptable.trackID as trackID,
    trackstable.trackName as trackName,
    trackstable.trackIMG as trackImage
    FROM (
    SELECT * FROM historytable
    WHERE userID = $userID AND historytable.datePlayed >= DATE(NOW() - INTERVAL 30 DAY)) AS tempTable
    INNER JOIN trackstable
    ON tempTable.trackID = trackstable.trackID
    GROUP BY userID, trackstable.trackName, trackstable.trackIMG, temptable.trackID
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
    ?>
</div>

<style>
    .playThirty {
        display: none;
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
        margin-bottom: 5px;
    }

    .liked-songs-text {
        font-size: 12px;
        color: gray;
        margin-right: 7px;
        margin-left: 30px;
        /* Adjusted margin-left */
    }

    .liked-songs-number {
        font-size: 13px;
        font-weight: bold;
    }
</style>