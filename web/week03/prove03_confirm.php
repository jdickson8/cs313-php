<html>
<head>
<meta charset="utf-8">
<link href="../index.css" rel="stylesheet" type="text/css">
<link href="prove03.css" rel="stylesheet" type="text/css">
</head>

<body>
	<a id="top"></a>
		<h1>Congradulations on your purchase!</h1>
            <header>
                <table>
                    <tr>
                        <th><a href="../index.php">Home</a></th>
                        <th><a href="../assignments.html">Assignments</a></th>
                        <th><a href="https://ilearn.byui.edu/">I-Learn</a></th>
                        <th><a href="#bottom">Bottom of the page</a></th>
                    </tr>
                </table>
            </header>

			<hr/>

<div><a href="prove03.php">Start Over</a></div><br/>

<?php
	echo "<div>";
	echo "Thank you for your order! <br>";
	echo "Order #" . rand(1, 10000);
	echo "</div>";
?>

<hr/>
				 
			<footer>
				<table><tr><th><a href="#top">Top of page</a></th></tr></table>
			</footer>

			<br/>
			<a id="bottom"></a> 
			
</body>
</html>
