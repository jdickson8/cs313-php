<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>John Dickson's Home Page</title>
		<link rel="stylesheet" type="text/css" href="index.css" />
		<script type="text/javascript" src="index.js"></script>
	</head>

	<body>
		<a id="top"></a>
		<h1>Welcome to John Dickson's home page!</h1>
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

			<div>
				<p>John Dickson<br/>SE - Software Engineer<br/>Yakima, WA</p><br/>

				<span><img src="images/me.jpg" alt="Me"></span><br/><br/>

				<blockquote>"What is better? To be born good or to overcome your evil nature through great effort?"<br/>- Paarthurnax, Elder Scrolls V: Skyrim</blockquote><br/><br/>

				<?php

				date_default_timezone_set('America/Boise');

				$date = date('Y-m-d H:i:s');

				echo "Current time: " . $date;

				?>

				<br/>
				 
			</div>
				<hr/>
				 
			<footer>
				<table><tr><th><a href="#top">Top of page</a></th></tr></table>
			</footer>

			<br/>
			<a id="bottom"></a> 
	</body>
</html>
