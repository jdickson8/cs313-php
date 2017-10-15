<!DOCTYPE html>
<html>
	<head>
		<title>Project1 - Back-Alley Bridge Stats</title>
		<link rel="stylesheet" type="text/css" href="css1.css">
		<script src="js1.js"></script>
	</head>

	<body>

	<?php
			$statement = $db->prepare("SELECT * FROM user WHERE user = $_POST['user']");
			$statement->execute();

			// Go through each result
			while ($row = $statement->fetch(PDO::FETCH_ASSOC))
			{
				echo '<p>';
				echo '<strong>' . $row['username'] . ' ' . $row['password'] . ':';
				echo $row['display_name'] . '</strong>' . ' - ' . $row['average_bid'] . ' - ' . $row['bid_sucess_rate'];
				echo '</p>';
			}

			$statement = $db->prepare("SELECT * FROM game WHERE game = $_POST['game']");
			$statement->execute();

			// Go through each result
			while ($row = $statement->fetch(PDO::FETCH_ASSOC))
			{
				echo '<p>';
				echo '<strong>' . $row['player1_id'] . ' ' . $row['player2_id'] . ':';
				echo $row['player3_id'] . '</strong>' . ' - ' . $row['player4_id'] . ' - ' . $row['rounds'] . ' - ' . $row['score'] . ' - ' . $row['win'] . ' - ' . $row['average_bid'] . ' - ' . $row['bid_sucess_rate'];
				echo '</p>';
			}

			$statement = $db->prepare("SELECT * FROM round WHERE round = $_POST['round']");
			$statement->execute();

			// Go through each result
			while ($row = $statement->fetch(PDO::FETCH_ASSOC))
			{
				echo '<p>';
				echo '<strong>' . $row['game_id'] . ' ' . $row['round_number'] . ':';
				echo $row['player1_bid'] . '</strong>' . ' - ' . $row['player2_bid'] . ' - ' . $row['player3_bid'] . ' - ' . $row['player4_bid'] . ' - ' . $row['team1_tricks'] . ' - ' . $row['team2_tricks'] . ' - ' . $row['team1_gotbid'] . ' - ' . $row['team2_gotbid'] . ' - ' . $row['team1_points'] . ' - ' . $row['team2_points'];
				echo '</p>';
			}
		?>

	</body>

</html>
