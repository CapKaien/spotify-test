<?php

$q = "SELECT historytable.userID,
    genrestable.genres as genre,
    COUNT(genrestable.genres) AS genreCount
    FROM spotifydb.historytable
    INNER JOIN trackstable
    ON historytable.trackID = trackstable.trackID
    INNER JOIN trackinfo
    ON trackstable.trackID = trackinfo.trackID
    INNER JOIN artiststable
    ON trackinfo.artistID = artiststable.artistID
    INNER JOIN genrestable
    ON artiststable.artistID = genrestable.artistID
    GROUP BY historytable.userID, genrestable.genres
    HAVING historytable.userID = $userID
    ORDER BY genreCount DESC
    LIMIT 10;";

$result = mysqli_query($dbcon, $q);
$genre = array();
$count = array();
while ($row = $result->fetch_assoc()) {
    $genre[] = $row['genre'];
    $count[] = $row['genreCount'];
}
?>

<div class="barGraph" style="width: 100%; margin: auto; background-color: #0D1318; border-radius: 10px;">
    <canvas id="genreChart"></canvas>
</div>

<script>
    const genreLabels = <?php echo json_encode($genre) ?>;
    const truncatedLabels = genreLabels.map(label => {
        const maxLength = 10;
        return label.length > maxLength ? label.substring(0, maxLength) + '...' : label;
    });

    const gconfig = {
        type: 'bar',
        data: {
            labels: truncatedLabels,
            datasets: [{
                label: 'Genre Count',
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
                        title: (tooltipItem) => genreLabels[tooltipItem[0].dataIndex]
                    }
                }
            }
        }
    };

    new Chart(document.getElementById('genreChart'), gconfig);
</script>
<?php mysqli_free_result($result); ?>