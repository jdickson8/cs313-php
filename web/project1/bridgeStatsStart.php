<?php
	require "dbConnect.php";
	$db = get_db();

	session_start();

	$username = "username";
	$password = "password";

	if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true) {
		header("Location: bridgeStats.php");
		die();
	}

	if (isset($_POST['username']) && isset($_POST['password'])) {
		if ($_POST['username'] == $username && $_POST['password'] == $password) {

			$_SESSION['logged_in'] = true;
			header("Location: bridgeStats.php");
			die();
		}
	}
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Project1 - Back-Alley Bridge Stats</title>
		<link href="../index.css" rel="stylesheet" type="text/css">
	</head>

	<body>
		<a id="top"></a>
		<h1>Login</h1>
			<header>
				<table>
					<tr>
						<th><a href="assignments.html">Assignments</a></th>
						<th><a href="https://ilearn.byui.edu/">I-Learn</a></th>
						<th><a href="https://www.linkedin.com/in/john-dickson-a80b53aa/">Linkedin</a></th>
						<th><a href="#bottom">Bottom of the page</a></th>
					</tr>
				</table>
			</header>

			<hr/>

			<div style="text-align: center">
				<form action="bridgeStats.php" method="post">
					Username: <br/>
					<input type="text" name="username"><br/>
					Password: <br/>
					<input type="text" name="password"><br/>
					<input type="submit" name="login" value="Login!"/>
				</form>
			</div>

			<hr/>

		<footer>
			<table><tr><th><a href="#top">Top of page</a></th></tr></table>
		</footer>

		<br/>
		<a id="bottom"></a> 

	</body>

</html>
