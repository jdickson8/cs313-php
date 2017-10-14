<!DOCTYPE html>
<html>
	<head>
		<title>Project1 - Back-Alley Bridge Stats</title>
		<link rel="stylesheet" type="text/css" href="css1.css">
		<script src="js1.js"></script>
	</head>

	<body>

	<?php
		$statement = $db->prepare("SELECT book, chapter, verse, content FROM scripture WHERE book = $_POST['book']");
		$statement->execute();

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
