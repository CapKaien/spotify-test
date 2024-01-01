<?php
echo '<form>
<table class="table" style="width: 1200px;"><thead><tr class="tablehead"><th><b>Song</b></th>
 <th class="date-header"><b>Date/Time Played</b></th></tr></thead><tbody>';
while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
    // Calculate the time difference
    date_default_timezone_set('Asia/Manila');
    $currentTime = time();
    //echo date_default_timezone_get();
    $trackTime = strtotime($row['datePlayed2']);
    $timeDifference = $currentTime - $trackTime;

    // Display time or date accordingly
    //$displayTime = ($timeDifference < 86400) ? date("H\h i\m", $timeDifference) . ' ago' : date("Y-M-d", $trackTime);
    //$displayTime = ($timeDifference < 86400) ? $currentTime . ' - ' . $trackTime . ' ago' : date("Y-M-d", $trackTime);
    if ($timeDifference < 3600) {
        $displayTime = date("i\m", $timeDifference) . ' ago';
    } else if ($timeDifference < 86400) {
        $displayTime = date("H\h i\m", $timeDifference) . ' ago';
    } else {
        $displayTime =  date("Y-M-d", $trackTime);
    }

    echo '<tr>
        <td class="d-flex align-items-center">
            <img src="' . $row['trackImage'] . '" name="' . $row['trackID'] . '" class="playButton img-thumbnail object-fit-contain trackimg" style="width: 180px; margin-right: 50px;" data-spotify-id="spotify:track:' . $row['trackID'] . '">
            <span class="ml-2">' . $row['trackName'] . '</span>
            <input type="button" name="' . $row['trackID'] . '" class="playButton btn btn-dark btn-light align-items-center mx-3 custom-left-padding" value="Play"
            data-spotify-id="spotify:track:' . $row['trackID'] . '"/>
        </td>
        <td class="custom-right-margin">
            <i class="bx bx-time"></i> ' . $displayTime . '
        </td>
      </tr>';
}
echo '</tbody></table></form>';
mysqli_free_result($result);
?>

<style>
    .custom-left-padding {
        margin-right: 500px;
        /* Adjust the margin as needed */
    }
</style>