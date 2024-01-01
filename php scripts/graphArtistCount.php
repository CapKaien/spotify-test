  <?php

  $q = "SELECT historytable.userID,
    artiststable.artistID,
    artiststable.artistName as artist,
    artiststable.artistIMG as artistImage,
    COUNT(artiststable.artistID) AS playCount
    FROM spotifydb.historytable
    INNER JOIN trackstable
    ON historytable.trackID = trackstable.trackID
    INNER JOIN trackinfo
    ON trackstable.trackID = trackinfo.trackID
    INNER JOIN artiststable
    ON trackinfo.artistID = artiststable.artistID
    GROUP BY historytable.userID,artiststable.artistID, 
    artiststable.artistName, artiststable.artistIMG
    HAVING historytable.userID = $userID
    ORDER BY playCount DESC
    LIMIT 10;";

  $result = mysqli_query($dbcon, $q);
  $artist = array();
  $artistCount = array();
  while ($row = $result->fetch_assoc()) {
    $artist[] = $row['artist'];
    $artistCount[] = $row['playCount'];
  }
  ?>

  <div class="barGraph" style="width: 100%; margin: auto; background-color: #0D1318; border-radius: 10px;">
    <canvas id="artistChart"></canvas>
  </div>


  <script>
    const aconfig = {
      type: 'bar',
      data: {
        labels: <?php echo json_encode($artist) ?>,
        datasets: [{
          label: 'Artist Count',
          data: <?php echo json_encode($artistCount) ?>,
          backgroundColor: [
            'rgba(73, 163, 183, 0.8)',
            'rgba(29, 185, 84, 0.8)'

          ],
          borderColor: [
            'rgb(73, 163, 183)',
            'rgb(29, 185, 84)'

          ],
          borderWidth: 1
        }]
      },
      options: {
        scales: {
          x: {
            ticks: {
              color: 'white'
            },
            grid: {
              drawOnChartArea: false
            }
          },
          y: {
            ticks: {
              color: 'white'
            },
            beginAtZero: true,
            grid: {
              drawOnChartArea: false
            }
          }
        },
        layout: {
          padding: 10
        },
        plugins: {
          legend: {
            labels: {
              font: {
                size: 20,
                weight: 'bold',
              }
            }
          }
        }
      }
    };

    new Chart(document.getElementById('artistChart'), aconfig);
  </script>