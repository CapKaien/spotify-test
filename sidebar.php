<nav class="sidebar locked">

    <div class="logo_items flex">
        <span class="nav_image">
            <!-- LOGO --> <img src="spotify-logo.png" alt="logo_img" />
        </span>
        <span class="logo_name">Scoutify</span>
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
                        <span>Listening History</span>
                    </a>
                </li>

                <li class="item">
                    <a href="docu.php" class="link flex">
                        <i class="bx bx-file"></i>
                        <span>Documentation</span>
                    </a>
                </li>

        </div>

        <li class="item">
            <a href="logout.php" class="link flex outBtn">
                <i class="bx bx-log-out"></i>
                <span>Logout</span>
            </a>
        </li>
        </ul>

        <!-- Include userView.php -->
        <?php include("php scripts/userView.php"); ?>

        <div class="sidebar_profile flex">
            <span class="nav_image">
                <?php echo '<img src="' . $userImage . '" alt="User Image" />'; ?>
            </span>
            <div class="data_text">
                <span class="name"><?php echo $user->display_name; ?></span>
                <span class="email"><?php echo $user->email; ?></span>
            </div>
        </div>
    </div>
</nav>
<script>
    document.querySelector('.outBtn')
        .addEventListener('click', function() {
            window.open('https://accounts.spotify.com/en/logout',
                '_blank',
                'width=400,height=400 top=200,left=600');
            window.open('logout.php', '_self');
        })
</script>