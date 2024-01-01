    <?php
    //Get the user's recently played tracks
    echo '<script>';
    $limit = 20; // You can adjust the limit to the desired number of items per request
    $offset;
    $tracks = $api->getMyRecentTracks(['limit' => $limit, 'before' => $offset]);
    do {

        $artistArray = array(); //For storing artists IDs
        //Insert Artists to artiststable and genres to genrestable
        //Store artist IDs in an array 
        foreach ($tracks->items as $track) {
            $artists = $track->track->artists;

            foreach ($artists as $artists) {
                $artistID = $artists->id;
                array_push($artistArray, $artistID);
            }
        }

        $artists = $api->getArtists($artistArray);
        // echo implode("','", $artistArray);
        // echo array_search('2DXPtOc14uPVvK7qggj2a3', $artistArray);
        // echo $artistArray[36];

        foreach ($artists->artists as $artists) {
            $artistID = "'" . $artists->id . "'";
            $artistName = $artists->name;
            $artistName = mysqli_real_escape_string($dbcon, $artistName);
            $artistImage = @getArtistImage($artists, $dbcon);

            $q = "SELECT artiststable.artistID, artiststable.artistIMG as imgURL FROM artiststable WHERE artistID = $artistID";
            $result = mysqli_query($dbcon, $q);
            $row = mysqli_num_rows($result);
            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
            if (!$row) {
                $q = "INSERT INTO artiststable(artistID, artistName, artistIMG)
            VALUES($artistID, '$artistName', '$artistImage')";
                $result = mysqli_query($dbcon, $q);
            } else if ($artistImage != $row['imgURL']) {
                $q = "UPDATE artiststable
                SET artiststable.artistIMG = '$artistImage'
                WHERE artistID = $artistID;";
                $result = mysqli_query($dbcon, $q);
                //echo 'console.log(' . $row['imgURL'] . '" ++ "' . $artistImage . ');';
            }

            $artistGenre = $artists->genres;

            $q = "SELECT * FROM genrestable WHERE artistID = $artistID";
            $result = mysqli_query($dbcon, $q);
            $row = mysqli_num_rows($result);
            if (!$row) {
                foreach ($artistGenre as $genre) {
                    $genre = mysqli_real_escape_string($dbcon, $genre);
                    $q = "INSERT INTO genrestable(artistID, genres)
                VALUES($artistID, '$genre')";
                    $result = mysqli_query($dbcon, $q);
                }
            }
        }
        //mysqli_free_result($result);

        //Insert recently played tracks into the database
        foreach ($tracks->items as $track) {
            //Insert tracks to trackstable if no duplicate
            $trackID = "'" . $track->track->id . "'";
            $trackName = $track->track->name;
            $trackName = mysqli_real_escape_string($dbcon, $trackName);
            $trackPic = $track->track->album->images[0]->url;
            $trackPic = mysqli_real_escape_string($dbcon, $trackPic);
            $trackArtists = $track->track->artists;


            $q = "SELECT * FROM trackstable WHERE trackID=$trackID";
            $result = mysqli_query($dbcon, $q);
            $row = mysqli_num_rows($result);
            if (!$row) {
                $q = "INSERT INTO trackstable(trackID, trackName, trackIMG)
                VALUES($trackID, '$trackName', '$trackPic')";
                $result = mysqli_query($dbcon, $q);
            }



            //Insert date to historytable if no duplicate
            $datePlayed = strtotime($track->played_at);
            $datePlayedFormat = date('Y-m-d H:i:s', $datePlayed + 25200);

            echo 'console.log(dateplayed: ' . $datePlayed .  ' date + 7hrs ' . $datePlayedFormat . ');';

            $datePlayedFormatMore = "'" . $datePlayedFormat . "'";
            $q = "SELECT * FROM historytable WHERE datePlayed=$datePlayedFormatMore";
            $result = mysqli_query($dbcon, $q);
            $row = mysqli_num_rows($result);
            if (!$row) {
                $q = "INSERT INTO historytable(userID, trackID, datePlayed)
                VALUES($userID, $trackID, $datePlayedFormatMore);";
                $result = mysqli_query($dbcon, $q);
                if (!$result)
                    print_r("error db");

                foreach ($trackArtists as $artists) {
                    $artistID = "'" . $artists->id . "'";
                    $q = "SELECT * FROM trackinfo WHERE trackID=$trackID AND artistID=$artistID";
                    $result = mysqli_query($dbcon, $q);
                    $row = mysqli_num_rows($result);
                    if (!$row) {
                        $q = "INSERT INTO trackinfo(trackID, artistID)
                VALUES($trackID, $artistID);";
                        $result = mysqli_query($dbcon, $q);
                        if (!$result)
                            print_r("error db");
                    }
                }
            }
            $track = $track->track;
        }

        $q = "SELECT userstable.userID,
    trackstable.trackID,
    trackstable.trackName as trackName,
    trackstable.trackIMG as trackImage,
    historytable.datePlayed as datePlayed2,
    DATE_FORMAT(historytable.datePlayed, '%M '  '%d, '  '%Y ') as trackDate
    FROM historytable
    INNER JOIN userstable
        ON historytable.userID = userstable.userID
        INNER JOIN trackstable
        ON historytable.trackID = trackstable.trackID
        WHERE userstable.userID = $userID
        ORDER BY datePlayed DESC;";
        $result = mysqli_query($dbcon, $q);

        $tracks = $api->getMyRecentTracks(['limit' => $limit, 'before' => $offset]);
        $offset = $tracks->cursors->before;
    } while (!empty($tracks->items));

    function getArtistImage($artists, $dbcon)
    {
        if ($artists->images[0]->url != null)
            $artistImage = $artists->images[0]->url;
        else
            $artistImage = null;
        $artistImage = mysqli_real_escape_string($dbcon, $artistImage);

        return $artistImage;
    }
    echo '</script>';
    ?>