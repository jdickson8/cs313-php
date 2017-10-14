<?php
	require "dbConnect.php";
	$db = get_db();
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Project1 - Back-Alley Bridge Stats</title>
		<link rel="stylesheet" type="text/css" href="css1.css">
		<script src="js1.js"></script>
	</head>

	<body>

		<form action="getBridgeStats.php" method="post">
			<input type="text" name="stats">
			<input type="submit" value="Get Stats" name="submit">
		</form>

		<?php
			$statement = $db->prepare("SELECT book, chapter, verse, content FROM scripture");
			$statement->execute();

			// Go through each result
			while ($row = $statement->fetch(PDO::FETCH_ASSOC))
			{
				echo '<p>';
				echo '<strong>' . $row['book'] . ' ' . $row['chapter'] . ':';
				echo $row['verse'] . '</strong>' . ' - ' . $row['content'];
				echo '</p>';
			}
		?>

	</body>

</html>
