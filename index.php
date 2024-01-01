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
            background-color: #1DB954;
            border-radius: 5px;
        }

        body::-webkit-scrollbar-track {
            background: transparent;
        }

        .btn-primary {
            margin-top: 20px;
            background-color: green !important;
            border-color: #28a745;
            transition: background-color 0.3s ease, border-color 0.3s ease;
            position: relative;
            border-radius: 50px;
            /* Adjust the border-radius to make it more oval */
            padding: 10px 30px;
            /* Adjust the padding for the desired width */
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
            border-radius: 50px;
            /* Match the button's border-radius */
        }

        .btn-primary:hover::after {
            margin-left: 12px;
            width: 85%;
        }


        .transparent-div {
            background-color: transparent;
            text-align: center;
            position: relative;
            width: 100%;
            padding: 20px;
            margin-top: 20px;
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
            max-height: 60px;
        }

        .logo-name {
            font-size: 30px;
            margin-bottom: 50px;
        }

        .jumbotron {
            background-image: url('collage.png');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            position: relative;
            margin-bottom: 0;
            background-attachment: fixed;
            height: 1000px;
            /* Increase the height to make it larger */
        }

        .jumbotron::before {
            content: "";
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            background: linear-gradient(to bottom, rgba(0, 0, 0, 0.5) 0%, rgba(0, 0, 0, 0.8) 100%);
            z-index: -1;
        }

        .jumbotron h1 {
            font-size: 5em;
            /* Increase the font size for the heading */
        }

        .jumbotron p {
            font-size: 1.5em;
            /* Increase the font size for the paragraph */
        }

        .jumbotron hr {
            margin: 20px 0;
            /* Increase the margin */
        }

        .jumbotron a.btn-primary {
            padding: 15px 40px;
            /* Increase the padding for the button */
            font-size: 1.5em;
            /* Increase the font size for the button */
        }

        .transparent-div h3 {
            font-size: 2em;
            /* Increase the font size for the heading in transparent div */
        }

        .transparent-div .col-md-4 h4 {
            font-size: 1.5em;
            margin-bottom: 50px;
            /* Increase the font size for the subheadings in transparent div */
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
            <!-- Top Tracks -->
            <div class="col-md-4 text-center">
                <img src="music-notes-svgrepo-com.svg" alt="Top Tracks" style="width: 100px; height: 100px;">
                <h4 class="spotify-green">Top Tracks</h4>
                <p>Discover your most-played tracks and explore your music journey through the songs you love the most.</p>
            </div>
            <!-- Genres -->
            <div class="col-md-4 text-center">
                <img src="audio-album-svgrepo-com.svg" alt="Genres" style="width: 100px; height: 100px;">
                <h4 class="spotify-green">Genres</h4>
                <p>Explore the diverse genres that make up your music taste and find out which styles resonate with you the most.</p>
            </div>
            <!-- Artists -->
            <div class="col-md-4 text-center">
                <img src="music-artist-svgrepo-com.svg" alt="Artists" style="width: 100px; height: 100px;">
                <h4 class="spotify-green">Artists</h4>
                <p>Learn more about the artists who have contributed to your music experience and influenced your musical preferences.</p>
            </div>

        </div>
    </div>


    <footer class="footer text-center text-lg-start text-white mt-3" style="background: linear-gradient(to right, #0f171d 30%, #330033 70%);">
        <div class="container-footer p-4 pb-0">
            <div class="row">
                <div class="col-md-12 col-lg-12 col-xl-12 mx-auto mt-5">
                    <div class="row">
                        <div class="col-md-4">
                            <h5 class="header text-uppercase mb-4">Team</h5>
                            <p class="info text-justify">Meet our talented team members who work hard to bring you the best experience.</p>
                        </div>
                        <div class="col-md-4">
                            <h5 class="header text-uppercase mb-4">About</h5>
                            <p class="info text-justify">Learn more about Scoutify and our mission to provide valuable content and services.</p>
                        </div>
                        <div class="col-md-4">
                            <h5 class="headertext-uppercase mb-4">Socials</h5>
                            <p class="info text-justify">Connect with us on social media for the latest updates and announcements.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="text-center p-3">
            © 2023 Copyright:
            <a class="text-white" href="homepage.php">Scoutify</a>
        </div>
    </footer>


    <script>
        document.addEventListener("scroll", function() {
            var scrollPosition = window.pageYOffset;
            var jumbotron = document.querySelector(".jumbotron");

            jumbotron.style.backgroundPosition = "center " + (-scrollPosition / 2) + "px";
        });
    </script>

    <style>
        .container-footer {
            height: 200px;
            display: flex;
            background: linear-gradient(to right, #0f171d 30%, #330033 70%);
            margin-top: 50px;
            align-items: center;
            justify-content: center;
            color: #ffffff;
        }

        .header {
            margin-bottom: 20px;
        }

        .info {
            font-size: 15px;
        }

        .row {
            margin-right: 20px;
            margin-left: 20px;
            margin-bottom: 40px;
        }

        a {
            text-decoration: none;
        }
    </style>

</body>

</html>