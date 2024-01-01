<!DOCTYPE html>
<html>
<head>
    <title>Number of Liked Songs</title>
</head>
<body>
   

    <?php

$limit = 50; // You can adjust the limit to the desired number of items per request
$offset = 0;
$totalLikedSongs = 0;

do {
    // Get a batch of liked songs with pagination
    $options = [
        'limit' => $limit,
        'offset' => $offset,
    ];
    $savedTracks = $api->getMySavedTracks($options);

    $totalLikedSongs += count($savedTracks->items);

    // Increase the offset for the next batch
    $offset += $limit;
} while (!empty($savedTracks->items));



?>

</body>
<style>
    .likeCount{
        text-align: left;
        font-size: 10px;
    }
</style>
</html>
