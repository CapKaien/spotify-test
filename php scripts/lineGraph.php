    <?php
    $q = "SELECT userID,
    COUNT(*) as count,
    DATE_FORMAT(datePlayed, '%M ' '%d, ' '%Y') as play_date
    FROM spotifydb.historytable
    GROUP BY userID, play_date
    HAVING userID = $userID
    ORDER BY play_date;";

    $result = mysqli_query($dbcon, $q);
    $count = array();
    $date = array();
    while ($row = $result->fetch_assoc()) {
      $count[] = $row['count'];
      $date[] = $row['play_date'];
    }
    ?>

    <div class="lineGraph" style="width: 100%; margin: auto; background-color: #0D1318; border-radius: 10px;">
      <canvas id="lineChart"></canvas>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
      const ctx = document.getElementById('lineChart');

      new Chart(ctx, {
        type: 'line',
        data: {
          labels: <?php echo json_encode($date) ?>,
          datasets: [{
            label: 'User Activity',
            data: <?php echo json_encode($count) ?>,
            fill: false,
            borderColor: 'rgb(29, 185, 84)',
            tension: 0.1
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
      });
    </script>
    <?php mysqli_free_result($result); ?>