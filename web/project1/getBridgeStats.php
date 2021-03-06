<?php
	require "dbConnect.php";
	$db = get_db();
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Project1 - Back-Alley Bridge Stats</title>
		<link href="../index.css" rel="stylesheet" type="text/css">
		<script src="js1.js"></script>
	</head>

	<body>
		<a id="top"></a>
		<h1>Welcome to John Dickson's home page!</h1>
			<header>
				<table>
					<tr>
						<th><a href="../assignments.html">Assignments</a></th>
						<th><a href="https://ilearn.byui.edu/">I-Learn</a></th>
						<th><a href="https://www.linkedin.com/in/john-dickson-a80b53aa/">Linkedin</a></th>
						<th><a href="#bottom">Bottom of the page</a></th>
					</tr>
				</table>
			</header>

			<hr/>

	<?php
			$statement = $db->prepare("SELECT * FROM player WHERE player = $_SESSION['player']");
			$statement->execute();

			// Go through each result
			while ($row = $statement->fetch(PDO::FETCH_ASSOC))
			{
				echo '<p>';
				echo $row['username'] . ' - ' . $row['password'] . ' - ';
				echo $row['display_name'] . ' - ' . $row['average_bid'] . ' - ' . $row['bid_sucess_rate'];
				echo '</p>';
			}

			$statement = $db->prepare("SELECT * FROM game WHERE game = $_SESSION['game']");
			$statement->execute();

			// Go through each result
			while ($row = $statement->fetch(PDO::FETCH_ASSOC))
			{
				echo '<p>';
				echo $row['player1_id'] . ' - ' . $row['player2_id'] . ' - ';
				echo $row['player3_id'] . ' - ' . $row['player4_id'] . ' - ' . $row['rounds'] . ' - ' . $row['score'] . ' - ' . $row['win'] . ' - ' . $row['average_bid'] . ' - ' . $row['bid_sucess_rate'];
				echo '</p>';
			}

			$statement = $db->prepare("SELECT * FROM round WHERE round = $_SESSION['round']");
			$statement->execute();

			// Go through each result
			while ($row = $statement->fetch(PDO::FETCH_ASSOC))
			{
				echo '<p>';
				echo $row['game_id'] . ' - ' . $row['round_number'] . ' - ';
				echo $row['player1_bid'] . ' - ' . $row['player2_bid'] . ' - ' . $row['player3_bid'] . ' - ' . $row['player4_bid'] . ' - ' . $row['team1_tricks'] . ' - ' . $row['team2_tricks'] . ' - ' . $row['team1_gotbid'] . ' - ' . $row['team2_gotbid'] . ' - ' . $row['team1_points'] . ' - ' . $row['team2_points'];
				echo '</p>';
			}
		?>

		<hr/>

		<footer>
			<table><tr><th><a href="#top">Top of page</a></th></tr></table>
		</footer>

		<br/>
		<a id="bottom"></a> 

	</body>

</html>
