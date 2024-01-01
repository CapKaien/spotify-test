<!DOCTYPE html>
<html>
<head>
    <title>Number of Followed Artists</title>
</head>
<body>

<?php

$limit = 50; // You can adjust the limit to the desired number of items per request
$offset = 0;
$totalFollowedArtists = 0;

do {
    // Get a batch of followed artists with pagination
    $options = [
        'limit' => $limit,
        'offset' => $offset,
    ];
    $followedArtists = $api->getUserFollowedArtists($options);

    $totalFollowedArtists += count($followedArtists->artists->items);

    // Increase the offset for the next batch
    $offset += $limit;
} while (!empty($followedArtists->artists->items));

echo '<p class="followedArtistsCount">' . $totalFollowedArtists . '</p>';

?>

</body>
<style>
    .followedArtistsCount{
        text-align: center;
        font-size: 40px;
    }
</style>
</html>
