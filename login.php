<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Scoutify - Your Spotify Analytics</title>
    <link rel="stylesheet" type="text/css" href="style.scss">
    <link rel="stylesheet" type="text/css" href="style1.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <style>
        body {
            background-color: #131820;

            color: white;

        }

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



        .jumbotron {
            background-color: #0D1318;

            color: white;
            position: relative;
            margin-bottom: 0;

        }

        .btn-primary {
            margin-top: 20px;
            background-color: green !important;
            border-color: #0D1318;
            transition: background-color 0.3s ease, border-color 0.3s ease;
            position: relative;
        }

        .btn-primary:hover {
            background-color: #043616;
            border-color: #043616;
        }

        .btn-primary::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0;
            height: 2px;
            background-color: #fff;
            transition: width 0.3s ease;
        }

        .btn-primary:hover::after {
            width: 100%;
        }





        .transparent-div {
            background-color: transparent;
            /* Set the background color to transparent */
            text-align: center;
            position: relative;
            /* Change position to relative */
            width: 100%;
            padding: 20px;
            /* Add padding for better visibility */
            margin-top: 20px;
            /* Add margin-top to create space between the content and transparent div */
        }


        .spotify-green {
            margin-top: 20px;
            color: white;
            font-size: 20px;
        }

        .footer {
            margin-top: 30px;
            background-color: #0D1318 !important;
            color: white;
            padding: 10px 0;
            position: relative;
            width: 100%;
        }

        .logo-img {
            margin-top: 30px;
            margin-bottom: 10px;
            max-width: 60px;
            /* Adjust the size as needed */
            max-height: 60px;
            /* Adjust the size as needed */
        }

        .logo-name {
            font-size: 30px;
            margin-bottom: 50px;
        }
    </style>
</head>

<body>

    <!-- Jumbotron -->
    <div class="jumbotron">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-left">
                <h1 class="display-3"><b>Welcome to <span style="color: #1DB954;">Scoutify</span></b></h1>
                    <p class="lead mt-4">Explore Your Spotify Analytics</p>
                    <hr class="my-4">
                    <p>Scoutify provides insights into your Spotify activities, helping you discover more about your music preferences.</p>
                    <a class="btn btn-primary btn-lg" href="auth.php" role="button">Get Started</a>
                </div>
                <div class="col-md-6">
                    <img src="" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </div>

    <!-- Transparent Div at the Bottom -->
    <div class="transparent-div">
        <div class="row">
            <div class="col-md-12 mb-5">
                <h3><b>Check your</b></h3>
            </div>
        </div>
        <div class="row">
            <!-- SVG at the top of each column -->
            <div class="col-md-4 text-center">
                <img src="music-notes-svgrepo-com.svg" alt="Top Tracks" style="width: 100px; height: 100px;">
                <h4 class="spotify-green">Top Tracks</h4>
            </div>
            <div class="col-md-4 text-center">
                <img src="audio-album-svgrepo-com.svg" alt="Genres" style="width: 100px; height: 100px;">
                <h4 class="spotify-green">Genres</h4>
            </div>
            <div class="col-md-4 text-center">
                <img src="music-artist-svgrepo-com.svg" alt="Artists" style="width: 100px; height: 100px;">
                <h4 class="spotify-green">Artists</h4>
            </div>
        </div>
    </div>




    <!-- Footer -->
    <div class="footer text-center">
        <img src="spotify-logo.png" alt="logo_img" class="img-fluid logo-img">
        <p class="logo-name">Scoutify</p>

        <p>&copy; 2023 Scoutify. All rights reserved.</p>
    </div>
</body>

</html>