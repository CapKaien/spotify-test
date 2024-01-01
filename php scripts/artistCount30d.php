<div class="content artistMonth" id="artistMonth">

    <?php

    $q = "SELECT tempTable.userID,
artiststable.artistID,
artiststable.artistName as artist,
artiststable.artistIMG as artistImage,
COUNT(artiststable.artistID) AS playCount
FROM (SELECT * FROM historytable
WHERE userID = $userID AND historytable.datePlayed >= DATE(NOW() - INTERVAL 30 DAY)) AS tempTable
INNER JOIN trackstable
ON tempTable.trackID = trackstable.trackID
INNER JOIN trackinfo
ON trackstable.trackID = trackinfo.trackID
INNER JOIN artiststable
ON trackinfo.artistID = artiststable.artistID
GROUP BY tempTable.userID,artiststable.artistID, 
artiststable.artistName, artiststable.artistIMG
ORDER BY playCount DESC;";

    $result = mysqli_query($dbcon, $q);

    if ($result) {
        echo '<table><tr class="tablehead">
        <td><b>Artist</b></td>
        <td><b>Play Count</b></td>
        </tr>';

        $counter = 1;

        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            $arrowColor = ($row['playCount'] > 5) ? 'green' : 'red'; // Change arrow color based on playCount
            echo '<tr><td class="d-flex px-3 align-items-center text-center">
            <span style="font-size:20px; width: 10px; display: inline-block;">
            <p style="display: inline; font-size:20px;">#</p>' . $counter . '<span class="arrow" style="color: ' . $arrowColor . ';">' . getArrow($arrowColor) . '</span>
            </span> <img src="' . $row['artistImage'] . '" 
            class="spotify-thumbnail trackimg" alt="Artist has no pfp">
            <p class="text-justify mx-auto" style="font-size: 0.75rem">' .
                $row['artist'] . '</p></td><td>' . $row['playCount'] . '</td></tr>';

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
    .artistMonth {
        display: none;
    }

    .img-thumbnail {
        width: 150px;
        height: 150px;
        margin-left: 50px;
        margin-right: 100px;
        object-fit: cover;
        border: 0;
        border-radius: 50%;
    }

    td {
        padding: 5px;
        text-align: center;
    }
</style>