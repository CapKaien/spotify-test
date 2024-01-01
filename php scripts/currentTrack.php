<div class="info">
  <?php
  // Get the currently playing track
  echo '<h2 class="curr mb-3">Currently Playing</h2>';


  try {
    $currentTrack = $api->getMyCurrentTrack();
    echo '<div class="track-info">'; // Create a container for the track info
    echo '<img src="' . $currentTrack->item->album->images[0]->url . '" class="album-art" alt="Album Art">';
    echo '<div class="text-info">'; // Create a container for text info
    echo '<p class="song-name">' . $currentTrack->item->name . '</p>';
    echo '<p class="artist-name">' . $currentTrack->item->artists[0]->name . '</p>';
    echo '</div>'; // Close text info container
    echo '</div>'; // Close track info container
  } catch (TypeError $ex) {
    echo '<p>No song currently playing</p>';
  }
  ?>
</div>

<style>
  #current-track-container {
    position: fixed;
    bottom: 0;
    right: 0;
    margin-right: 10px;
    border-radius: 10px;
    background: #0F141A;
    padding: 10px;
    display: flex;
    /* Use flexbox to align contents horizontally */
    align-items: center;
    /* Center items vertically within the container */
    /* Adjust the other styles as needed */
    color: #fff;
    width: 300px;
    height: 200px;
  }

  .curr {
    font-size: 17px;
    color: white;
    align-items: center;
    /* Add some spacing between the heading and the content */
  }

  .album-art {
    margin-left: 10px;
    width: 120px;
    /* Set the width of the image */
    height: 120px;
    /* Set the height of the image */
    margin-right: 10px;
    /* Add some spacing between the image and the text */
  }

  .track-info {
    display: flex;
    /* Use flexbox to align contents horizontally */
    align-items: center;
    /* Center items vertically within the track info container */
    justify-content: center;
  }

  .text-info {
    display: flex;
    /* Use flexbox to arrange text vertically */
    flex-direction: column;
    /* Arrange text elements vertically */
  }

  .song-name {
    font-size: 15px;
    font-weight: bold;
    margin: 0;
    /* Remove default margin for text elements */
  }

  .artist-name {
    font-size: 15px;

    margin: 0;
    margin-top: 5px;
  }

  .song-name,
  .artist-name {
    margin-left: 50px;
  }
</style>
