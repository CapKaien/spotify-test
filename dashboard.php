<?php
session_start();
?>
<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title></title>
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" type="text/css" href="sidebar-options/options/style1.css">
    <!-- Boxicons CSS -->
    <link flex href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="sidebar-options/options/script.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <link rel="stylesheet" type="text/css" href="style1.css">

</head>

<style>
    body::-webkit-scrollbar {
        width: 10px;
    }

    body::-webkit-scrollbar-thumb {
        background-color: #1DB954;
        border-radius: 5px;
    }

    body::-webkit-scrollbar-track {
        background: transparent;
    }
</style>

<body>
    <?php include("sidebar.php"); ?>


    <?php

    include("php scripts/history.php");

    ?>

    <div class="container mt-3"><?php include("playTrack.php"); ?></div>




    <div class="favs">

        <div class="rect_favSongs">

            <?php include("php scripts/favSongs.php"); ?>
        </div>

        <div class="rect_favPlaylist">
            <?php include("php scripts/favArtist.php"); ?>
        </div>



    </div>

    <div class="recs">
        <?php include("playTrack.php"); ?>
        
    </div>

    <div class="rect_recom">
    <?php include("php scripts/recommendation.php"); ?>
        </div>




    <?php include 'footer.php'; ?>

</body>

</html>