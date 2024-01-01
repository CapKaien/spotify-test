<div class="content genreMonth" id="genreMonth">

    <?php
    $q = "SELECT tempTable.userID,
    genrestable.genres as genre,
    COUNT(genrestable.genres) AS genreCount
    FROM (
    SELECT * FROM historytable
    WHERE userID = $userID AND historytable.datePlayed >= DATE(NOW() - INTERVAL 30 DAY)) AS tempTable
    INNER JOIN trackstable
    ON tempTable.trackID = trackstable.trackID
    INNER JOIN trackinfo
    ON trackstable.trackID = trackinfo.trackID
    INNER JOIN artiststable
    ON trackinfo.artistID = artiststable.artistID
    INNER JOIN genrestable
    ON artiststable.artistID = genrestable.artistID
    GROUP BY tempTable.userID, genrestable.genres
    ORDER BY genreCount DESC;";

    $result = mysqli_query($dbcon, $q);

    if ($result) {
        echo '<table><tr class="tablehead"><td><b>Genre</b></td>
        <td><b>Genre Count</b></td></tr>';

        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            $formattedGenre = ucwords($row['genre']);
            echo '<tr class="genre-row" style="background: linear-gradient(to right, #003716 ' . ($row['genreCount'] * 2) . '%, transparent ' . ($row['genreCount'] * 2) . '%);">';
            echo '<td class="genre-cell">' . $formattedGenre . '</td><td>' . $row['genreCount'] . '</td></tr>';
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
    .genreMonth {
        display: none;
    }

    /* Add this to your CSS file */
    .genre-cell {
        text-align: left;
        padding: 12px;
        /* Add padding for better visibility */
    }

    h2 {

        margin-bottom: 39px;
    }

    .genre-row {
        transition: background 0.3s;
        /* Add a smooth transition effect */

    }
</style>