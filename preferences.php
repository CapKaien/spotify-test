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

    <script src="script.js" defer></script>
    <link rel="stylesheet" type="text/css" href="style1.css">
</head>

<body>

    <!-- Loader -->
    <div class="loader-container">

        <svg version="1.1" id="L6" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
            <circle fill="none" stroke="#3CA9AF4D" stroke-width="4" cx="50" cy="50" r="44" style="opacity:0.5;" />
            <circle fill="#fff" stroke="#3CA9AF4D" stroke-width="3" cx="8" cy="54" r="6">
                <animateTransform attributeName="transform" dur="2s" type="rotate" from="0 50 48" to="360 50 52" repeatCount="indefinite" />
            </circle>
        </svg>
    </div>
    <div class="container">


        <div class="rect-container">
            <div class="rect slide-left"></div>
            <div class="rect1 slide-left"></div>

        </div>
        <div class="rect-container">
            <div class="rect2 slide-left"></div>
        </div>

        <nav class="sidebar locked">
            <div class="logo_items flex">
                <span class="nav_image">



                    <!-- LOGO --> <img src="spotify-logo.png" alt="logo_img" />
                </span>
                <span class="logo_name">Scoutify</span>
                <i class="bx bx-lock-alt" id="lock-icon" title="Unlock Sidebar"></i>
                <i class="bx bx-x" id="sidebar-close"></i>
            </div>




            <div class="menu_container">

                <div class="menu_items">
                    <ul class="menu_item">
                        <div class="menu_title flex">
                            <span class="title"></span>
                            <span class="line"></span>
                        </div>

                        <li class="item">
                            <a href="dashboard.php" class="link flex">
                                <i class="bx bx-grid-alt"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>

                        <li class="item">
                            <a href="analytics.php" class="link flex">
                                <i class="bx bx-bar-chart-alt-2"></i>
                                <span>Analytics</span>
                            </a>
                        </li>

                        <li class="item">
                            <a href="recent-history.php" class="link flex">
                                <i class="bx bx-history"></i>
                                <span>Recent History</span>
                            </a>
                        </li>

                        <li class="item">
                            <a href="settings.php" class="link flex">
                                <i class="bx bx-cog"></i>
                                <span>App Settings</span>
                            </a>
                        </li>

                        <li class="item">
                            <a href="preferences.php" class="link flex">
                                <i class="bx bx-user"></i>
                                <span>User Preferences</span>
                            </a>
                        </li>

                    </ul>
                </div>

            </div>
        </nav>

    </div>
    <script>
        // Show the loader when the page is refreshing
        document.querySelector('.loader-container').classList.remove('hidden');

        // Hide the loader after 1.5 seconds
        setTimeout(function() {
            document.querySelector('.loader-container').style.display = 'none';
        }, 1500);
    </script>

</body>
<style>
    body {
        background: #050f0f;
    }

    /* Styles for the loader container */
    .loader-container {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.8);
        display: flex;
        justify-content: center;
        align-items: center;
        z-index: 9999;
        /* Make sure the loader is on top of other content */
    }

    /* Styles for the loader itself (from the provided CSS) */
    .loader-container svg {
        width: 100px;
        height: 100px;
        margin: 20px;
        display: inline-block;
    }
</style>

</html>