<div class="header">
    <div class="logo">
        <?php

        require_once 'apiAccess.php';
        // It's now possible to request data about the currently authenticated user
        $user = $api->me();
        $userID = "'" . $user->id . "'";
        $userName = "'" . $user->display_name . "'";

        $_SESSION["userID"] = $userID;

        // Check if userID is already in the database
        $q = "SELECT * FROM userstable WHERE userID=$userID";
        $result = mysqli_query($dbcon, $q);
        $row = mysqli_num_rows($result);

        // If not, insert userID into the database
        if (!$row) {
            $q = "INSERT INTO usersTable(userName, userID) VALUES($userName, $userID)";
            $result = mysqli_query($dbcon, $q);
        }

        // Display user profile with image in a circular div
        $userImage = $user->images[0]->url ?? 'default_image_url.jpg'; // Provide a default image URL if the user has no image
        '<div class="user-profile">
                  <div class="profile-image-container">
                      <img class="profile-image" src="' . $userImage . '" alt="User Image">
                  </div>
                  <div class="welcome-text">
                      <p class="welcome">Welcome</p>
                      <p class="username">' . $user->display_name . '</p>
                  </div>
              </div>';
        ?>
    </div>
</div>

<style>
    .user-profile {
        display: flex;
        align-items: center;
        justify-content: flex-end;
        /* Align items to the right */
        text-align: left;
    }

    .profile-image-container {
        width: 50px;
        /* Adjust the size as needed */
        height: 50px;
        /* Adjust the size as needed */
        overflow: hidden;
        border-radius: 50%;
        margin-right: 40px;
        /* Adjust margin as needed */
    }

    .profile-image {
        width: 100%;
        height: 100%;
        object-fit: cover;
        /* Ensure the image covers the entire container */
        border-radius: 50%;
    }

    .welcome-text {
        margin-right: 20px;
        /* Adjust margin as needed */
        color: #333;
        /* Adjust color as needed */
        font-size: 5px;
        /* Adjust font size as needed */
        margin-top: 15px;
    }

    .welcome {
        font-size: 13px;
        margin-bottom: 2px;
        /* Decrease the spacing between "Welcome" and "Username" */

    }

    .username {
        font-weight: bold;
        /* Optionally make the username bold */
        font-size: 13px;

    }
</style>