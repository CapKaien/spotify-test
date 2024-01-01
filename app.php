<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Scoutify</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="style.css">

	<script src="node_modules/chart.js/dist/chart.umd.js"></script>
</head>

<body>

	<div class="container">


		<div class="content">
			<h1>Scoutify</h1>



			<?php
			require('php scripts/apiAccess.php');
			include("php scripts/userView.php");


			include("php scripts/history.php");

			include("php scripts/playCount.php");
			include("php scripts/graphPlayCount.php");

			include("php scripts/artistCount.php");
			include("php scripts/graphArtistCount.php");

			include("php scripts/genreCount.php");
			include("php scripts/graphGenreCount.php");

			include("php scripts/lineGraph.php");
			//include("php scripts/topTracks.php");

			//close database after??
			mysqli_close($dbcon);

			//set the response content type as JSON
			?>


		</div>
		<?php
		include("php scripts/currentTrack.php");
		?>


	</div>




</body>

</html>