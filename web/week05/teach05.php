<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />

    <!-- Page title -->
    <title>Scripture Resources</title>
</head>
	<body>
		<h1>Scripture Resources</h1>
		<?php
			try
			{
			  $dbUrl = getenv('DATABASE_URL');

			  $dbOpts = parse_url($dbUrl);

			  $dbHost = $dbOpts["host"];
			  $dbPort = $dbOpts["port"];
			  $dbUser = $dbOpts["user"];
			  $dbPassword = $dbOpts["pass"];
			  $dbName = ltrim($dbOpts["path"],'/');

			  $db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);

			  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			}
			catch (PDOException $ex)
			{
			  echo 'Error!: ' . $ex->getMessage();
			  die();
			}

			$statement = $db->query('SELECT book, chapter, verse, content FROM scriptures');
			while ($row = $statement->fetch(PDO::FETCH_ASSOC))
			{
			  echo '<strong>' . $row['book'] . ' ' . $row['chapter'] . ':' . $row['verse'] . '</strong>';
			  echo ' - "' . $row['content'] . '"<br/>'; 
			}

		?>
	</body>
</html>