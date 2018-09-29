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

				<blockquote id="timer"></blockquote>

				<br/>

				<div>
					<?php
					//Here you find out what day of the week the first day of the month falls on
					$day_of_week = date('D', $first_day) ;
					//Once you know what day of the week it falls on, we know how many blank days //occur before it. If the first day of the week is a
					//Sunday, then it is zero
					switch($day_of_week)
					{
					case "Sun": $blank = 0; break;
					case "Mon": $blank = 1; break;
					case "Tue": $blank = 2; break;
					case "Wed": $blank = 3; break;
					case "Thu": $blank = 4; break;
					case "Fri": $blank = 5; break;
					case "Sat": $blank = 6; break;
					}
					//We then determine how many days are in the current month
					$days_in_month = cal_days_in_month(0, $month, $year);

					//Here you start building the table heads
					echo "";
					echo " $title $year ";
					echo "SMTWTFS";
					//This counts the days in the week, up to 7
					$day_count = 1;
					echo "";
					//first you take care of those blank days
					while ( $blank > 0 )
					{
					echo "";
					$blank = $blank-1;
					$day_count++;
					}

					//sets the first day of the month to 1
					$day_num = 1;
					//count up the days, until you've done all of them in the month
					while ( $day_num $day_num ";
					$day_num++;
					$day_count++;
					//Make sure you start a new row every week
					if ($day_count > 7)
					{
					echo "";
					$day_count = 1;
					}

					//Finally you finish out the table with some blank details
					//if needed
					while ( $day_count >1 && $day_count ";
					$day_count++;
					}
					echo ""; 
					?>

				</div>
				 
			</div>
				<hr/>
				 
			<footer>
				<table><tr><th><a href="#top">Top of page</a></th></tr></table>
			</footer>

			<br/>
			<a id="bottom"></a> 
	</body>
</html>
