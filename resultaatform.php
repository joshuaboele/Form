<!DOCTYPE html>
<html>
	<head>
		<title>Voorbeeld HTML formulier</title>
		<link rel="stylesheet" type="text/css" href="styles.css" />
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
	</head>
	<body>
		<div id="wrapper">
			<h1>Resultaten</h1>
			<?php
			$naam = $_POST["naam"];
			$email = $_POST["email"];
			$opmerkingen = $_POST["opmerkingen"];
			$time_spent = $_POST["time_spent"];
			$gids = $_POST["gids"];
			$percentage = $_POST["percentage"];
			$studio = $_POST["studio"];
			$gids_joined = join(",", $gids);
			echo "<b>Naam:</b> $naam<br>";
			echo "<b>E-mail:</b> $email<br>";
			echo "<b>Vertel iets over jezelf: </b> $opmerkingen<br>";
			echo "<b>Hoeveel uur game je gemiddeld op een (vrije) dag?</b> $time_spent<br>";
			echo "<b>Welke genre(s) games speel je?</b> $gids_joined<br>";
			echo "<b>Hoeveel procent van je vrienden speelt games?</b> $percentage<br>";
			echo "<b>Welke studios vind je goed?</b> $studio<br>";
			?>
		</div>
	</body>
</html>