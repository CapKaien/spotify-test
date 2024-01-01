<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');
    </style>
</head>

<style>
    body {
        background: #050f0f;
        margin: 0;
        overflow: hidden;
    }

    .container {
        display: flex;
        align-items: center;
        margin-top: 25px;
        margin-left: 35px;
    }

    .logo {
        width: 60px;
        height: 60px;
        max-width: 100%;
        /* Prevent resizing when zooming */
    }

    .text-container {
        display: flex;
        flex-direction: column;
        justify-content: center;
        flex-shrink: 0;
        color: #FFF;
        font-family: 'Poppins', Regular;
        font-size: 40px;
        font-style: normal;
        font-weight: 600;
        line-height: normal;
        margin-left: 10px; /* Adjust margin as needed */
    }

    .vertical-line {
        width: 3px;
        height: 70px;
        margin-left: 20px; /* Adjust margin as needed */
        margin-right: 20px; /* Adjust margin as needed */
        background-color: #FFF;
    }

    .dashboard-text {
        font-weight: normal; /* Not bold */
        font-size: 30px;
        color: #FFF;
        font-family: 'Poppins', Regular;
    }

    .content-container {
            display: none;
        }

        .button-container.active + .content-container {
            display: block;
        }

        .button-container.active {
            transform: translateX(-50px);
        }
</style>

<body>
    <div class="container">
        <img src="spotify-logo.png" alt="Logo" class="logo" />
        <div class="text-container">
            Scoutify
        </div>
        <div class="vertical-line"></div>
        <div class="dashboard-text">
            Dashboard
        </div>
    </div>


</body>

</html>
