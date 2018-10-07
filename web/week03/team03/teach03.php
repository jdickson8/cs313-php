<html lang="en">
<head>
  <title>Form Submission</title>
  <meta charset="utf-8">
  <link href="../../index.css" rel="stylesheet" type="text/css">
  <link href="../prove03.css" rel="stylesheet" type="text/css">
</head>

<body>
	<a id="top"></a>
		<h1>Currently in your cart</h1>
			<header>
				<table>
					<tr>
						<th><a href="../../index.php">Home</a></th>
            			<th><a href="../../assignments.html">Assignments</a></th>
            			<th><a href="https://ilearn.byui.edu/">I-Learn</a></th>
            			<th><a href="#bottom">Bottom of the page</a></th>
					</tr>
				</table>
			</header>

		<hr/>

    <div>
      Name: <?php echo $_POST['name'] ?><br/><br/>
      Email: <?php echo $_POST['email'] ?><br/><br/>
      Major: <?php echo $_POST['major'] ?><br/><br/>
      Continents: <?php foreach($_POST['continents'] as $continent) {
        echo $continent . "<br/>";
      } ?><br/><br/>
      Comments: <?php echo $_POST['comments'] ?><br/><br/>
    </div>

  	<hr/>
				 
	<footer>
		<table><tr><th><a href="#top">Top of page</a></th></tr></table>
	</footer>

	<br/>
	<a id="bottom"></a> 

</body>
</html>
