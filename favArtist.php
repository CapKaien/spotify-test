<div class="content">
    <h2 class="title"><b>Top Artists</b></h2>

    <?php
    $q = "SELECT historytable.userID,
    artiststable.artistID,
    artiststable.artistName as artist,
    artiststable.artistIMG as artistImage,
    COUNT(artiststable.artistID) AS playCount
    FROM spotifydb.historytable
    INNER JOIN trackstable
    ON historytable.trackID = trackstable.trackID
    INNER JOIN trackinfo
    ON trackstable.trackID = trackinfo.trackID
    INNER JOIN artiststable
    ON trackinfo.artistID = artiststable.artistID
    GROUP BY historytable.userID,artiststable.artistID, 
    artiststable.artistName, artiststable.artistIMG
    HAVING historytable.userID = $userID
    ORDER BY playCount DESC
    LIMIT 100;";

    $result = mysqli_query($dbcon, $q);

    if ($result) {
        echo '<div class="grid-container">';

        $counter = 1;

        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            echo '<div class="grid-item">
                    <p style="font-size: 1rem; margin: 5px;"><span style="font-size: 0.8rem; ">#</span>' . $counter . '</p>
                    <img src="' . $row['artistImage'] . '" class="img-tb object-fit-contain trackimg" alt="Artist has no pfp">
                    <p class="text-justify mx-auto" style="font-size: 1rem; margin-top:10px;">' . $row['artist'] . '</p>
                  </div>';

            $counter++;
        }
        echo '</div>';
        mysqli_free_result($result);
    } else {
        echo '<p class="error"> The current users could not be retrieved due to an unknown error. We apologize</p>
        <img src="https://cdn.7tv.app/emote/60abf171870d317bef23d399/4x.webp"></img>';
        echo '<p>' . mysqli_error($dbcon) . '</p>';
    }
    ?>
</div>

<style>
    .grid-container {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        /* Set to 4 columns */
        gap: 20px;
        margin-top: 20px;
    }

    .grid-item {
        text-align: center;
    }

    .img-tb {
        width: 70%;
        /* Set to 100% */
        height: 100px;
        object-fit: cover;
        border: 0;
        border-radius: 50%;
    }
</style>