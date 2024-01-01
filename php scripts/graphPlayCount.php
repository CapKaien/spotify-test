  <?php

  $q = "SELECT userID,
    COUNT(historytable.trackID) as playCount,
    trackstable.trackName as trackName,
    trackstable.trackIMG as trackImage
    FROM spotifydb.historytable
    INNER JOIN trackstable
    ON historytable.trackID = trackstable.trackID
    GROUP BY userID, trackstable.trackName, trackstable.trackIMG 
    HAVING userID = $userID
    ORDER BY playCount DESC
    LIMIT 10;";

  $result = mysqli_query($dbcon, $q);
  $song = array();
  $count = array();
  while ($row = $result->fetch_assoc()) {
    $song[] = $row['trackName'];
    $count[] = $row['playCount'];
  }
  ?>

  <div class="barGraph" style="width: 100%; margin: auto; background-color: #0D1318; border-radius: 10px;">
    <canvas id="myChart"></canvas>
  </div>

  <script>
    const songLabels = <?php echo json_encode($song) ?>;
    const truncatedSongLabels = songLabels.map(label => {
      const maxLength = 10;
      return label.length > maxLength ? label.substring(0, maxLength) + '...' : label;
    });
    const config = {
      type: 'bar',
      data: {
        labels: truncatedSongLabels,
        datasets: [{
          label: 'Play Count',
          data: <?php echo json_encode($count) ?>,
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
          },
          tooltip: {
            callbacks: {
              title: (tooltipItem) => songLabels[tooltipItem[0].dataIndex]
            }
          }
        }
      }
    };

    new Chart(document.getElementById('myChart'), config);
  </script>
  <?php mysqli_free_result($result); ?>