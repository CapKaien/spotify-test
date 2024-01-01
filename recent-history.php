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
    <!-- Boxicons CSS -->
    <link flex href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="sidebar-options/options/script.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="style1.css">
</head>

<body>
    <?php
    require('php scripts/apiAccess.php');
    include("sidebar.php");
    include("php scripts/history.php");
    ?>


    <div class="container">
        <?php include('playTrack.php'); ?>
        <div class="rect-container">
            <div class="rect5 slide-left"><?php include('recentTracks.php'); ?></div>
        </div>
    </div>

    <?php include 'footer.php'; ?>
</body>
<style>
    body::-webkit-scrollbar {
        width: 10px;
    }

    body::-webkit-scrollbar-thumb {
        background-color: #3B3F4E;
        border-radius: 5px;
    }

    body::-webkit-scrollbar-track {
        background: transparent;
    }
</style>

</html>