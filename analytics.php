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




    <div class="container mt-3">
        <?php include('playTrack.php'); ?>

        <div class="btn-liked-container">
            <div class="btn-div">
                <button id="play24H" class="time-period-btn">Today</button>
                <button id="play7D" class="time-period-btn">Last 7 Days</button>
                <button id="play30D" class="time-period-btn">Last 30 Days</button>
                <button id="playAll" class="time-period-btn">See All</button>
            </div>

            <?php include("php scripts/likedSongsCount.php"); ?>
            <div class="liked-songs-count">
                <p class="liked-songs-text">Liked Songs:</p>
                <p class="liked-songs-number" style="color: green;"><?php echo $totalLikedSongs; ?></p>
            </div>
        </div>

        <div class="rect-container" id="custom-scrollbar">
            <div class="rect" id="playCount">
                <h2 class="title"><b>Top Tracks</b></h2>


                <?php include("php scripts/playCount.php"); ?>
                <?php include("php scripts/playCount24h.php"); ?>
                <?php include("php scripts/playCount7d.php"); ?>
                <?php include("php scripts/playCount30d.php"); ?>

            </div>
            <div class="rect">
                <h2 class="title"><b>Best of the Best</b></h2>


                <?php include("php scripts/artistCount.php") ?>
                <?php include("php scripts/artistCount24h.php") ?>
                <?php include("php scripts/artistCount7d.php") ?>
                <?php include("php scripts/artistCount30d.php") ?>
            </div>
            <div class="rect" id="genreCount">
                <h2 class="title"><b>Personal Choice</b></h2>


                <?php include("php scripts/genreCount.php") ?>
                <?php include("php scripts/genreCount24h.php") ?>
                <?php include("php scripts/genreCount7d.php") ?>
                <?php include("php scripts/genreCount30d.php") ?>
            </div>
        </div>


    </div>
    <div class="graph-container">
        <div class="w-75 m-auto mt-3"><?php include('php scripts\graphPlayCount.php') ?></div>
    </div>
    <div class="graph-container">
        <div class="w-75 m-auto mt-3"><?php include('php scripts\graphArtistCount.php') ?></div>
    </div>
    <div class="graph-container">
        <div class="w-75 m-auto mt-3"><?php include('php scripts\graphGenreCount.php') ?></div>
    </div>
    <div class="graph-container">
        <div class="w-75 m-auto mt-3"><?php include('php scripts\lineGraph.php') ?></div>
    </div>

    <?php include 'footer.php'; ?>

</body>
<script>
    $(document).ready(function() {
        $(".time-period-btn").click(function() {
            // Remove active class from all buttons
            $(".time-period-btn").removeClass("active");
            // Add active class to the clicked button
            $(this).addClass("active");
        });

        $("#play7D").click(function() {
            $("#playCountAll").hide();
            $("#playSeven").show();
            $("#playToday").hide();
            $("#playThirty").hide();

            $("#artistCountAll").hide();
            $("#artistWeek").show();
            $("#artistToday").hide();
            $("#artistMonth").hide();

            $("#genreCountAll").hide();
            $("#genreWeek").show();
            $("#genreToday").hide();
            $("#genreMonth").hide();
        });
        $("#playAll").click(function() {
            $("#playCountAll").show();
            $("#playSeven").hide();
            $("#playToday").hide();
            $("#playThirty").hide();

            $("#artistCountAll").show();
            $("#artistWeek").hide();
            $("#artistToday").hide();
            $("#artistMonth").hide();

            $("#genreCountAll").show();
            $("#genreWeek").hide();
            $("#genreToday").hide();
            $("#genreMonth").hide();


        });
        $("#play24H").click(function() {
            $("#playCountAll").hide();
            $("#playSeven").hide();
            $("#playToday").show();
            $("#playThirty").hide();

            $("#artistCountAll").hide();
            $("#artistWeek").hide();
            $("#artistToday").show();
            $("#artistMonth").hide();

            $("#genreCountAll").hide();
            $("#genreWeek").hide();
            $("#genreToday").show();
            $("#genreMonth").hide();
        });
        $("#play30D").click(function() {
            $("#playCountAll").hide();
            $("#playSeven").hide();
            $("#playToday").hide();
            $("#playThirty").show();

            $("#artistCountAll").hide();
            $("#artistWeek").hide();
            $("#artistToday").hide();
            $("#artistMonth").show();

            $("#genreCountAll").hide();
            $("#genreWeek").hide();
            $("#genreToday").hide();
            $("#genreMonth").show();
        });
    });
</script>
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

    /* Style for transparent buttons */
    button {
        background-color: transparent;
        color: #fff;
        /* Set the text color to white or the desired color */
        border: 1px solid #fff;
        /* Add a border to make the button visible */
        border-radius: 50px;
        /* Optional: Add border-radius for rounded corners */
        padding: 8px 12px;
        /* Optional: Adjust padding for better appearance */
        margin: 5px;
        /* Optional: Adjust margin for spacing between buttons */
        cursor: pointer;
    }

    /* Hover effect for buttons */
    button:hover {
        background-color: rgba(255, 255, 255, 0.2);
        /* Add a slight background color on hover */
    }

    /* Style for transparent buttons */
    .time-period-btn {
        background-color: transparent;
        color: #fff;
        /* Set the text color to white or the desired color */
        border: 1px solid #fff;
        /* Add a border to make the button visible */
        border-radius: 50px;
        /* Optional: Add border-radius for rounded corners */
        padding: 8px 12px;
        /* Optional: Adjust padding for better appearance */
        margin: 5px;
        /* Optional: Adjust margin for spacing between buttons */
        cursor: pointer;
    }

    /* Hover effect for buttons */
    .time-period-btn:hover {
        background-color: rgba(29, 185, 84, 0.2);
    }

    .time-period-btn.active {
        background-color: #1DB954;
    }

    .btn-div {
        border-radius: 10px;
        width: 600px;

        margin-top: 20px;
        justify-content: space-around;
        margin-bottom: 20px;
    }

    /* Style for the transparent buttons */
    .btn-div button {
        background-color: transparent;
        color: #fff;
        /* Set the text color to white or the desired color */
        border: 2px solid #fff;
        /* Add a border to make the button visible */
        border-radius: 50px;
        /* Optional: Add border-radius for rounded corners */
        padding: 8px 12px;
        /* Optional: Adjust padding for better appearance */
        cursor: pointer;
    }

    /* Hover effect for buttons */
    .btn-div button:hover {
        background-color: rgba(255, 255, 255, 0.2);
    }

    .btn-liked-container {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-left: 185px;
        /* Adjust this value based on your design */
        margin-top: 20px;
        margin-bottom: 20px;
    }
</style>



</html>