<?php
session_start();
if (isSet($_POST['product1']))
  $_SESSION['product1'] = $_POST['product1'];
if(isSet($_POST['product2']))
  $_SESSION['product2'] = $_POST['product2'];
if(isSet($_POST['product3']))
  $_SESSION['product3'] = $_POST['product3'];
?>

<html lang="en">
<head>
  <title>Gift Shop</title>
  <meta charset="utf-8">
  <link href="../index.css" rel="stylesheet" type="text/css">
  <link href="prove03.css" rel="stylesheet" type="text/css">
</head>

<body>
	<a id="top"></a>
		<h1>Currently in your cart</h1>
			<header>
				<table>
					<tr>
						<th><a href="../index.html">Home</a></th>
            			<th><a href="../assignments.html">Assignments</a></th>
            			<th><a href="https://ilearn.byui.edu/">I-Learn</a></th>
            			<th><a href="#bottom">Bottom of the page</a></th>
					</tr>
				</table>
			</header>

			<hr/>

  <form action="prove03_checkout.php" method="post">
    <span id="product"><b>Toyota: </b></span>
    <select id="toyota" name="product1">
      <option value="<?php $_SESSION['product1']?>" selected><?php echo $_SESSION['product1'];?></option>
      <option value="0">0</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
      </select><br/>
      <span id="product"><b>Ford: </b></span>
      <select id="ford" name="product2">
      <option value="<?php $_SESSION['product2']?>" selected><?php echo $_SESSION['product2'];?></option>
      <option value="0">0</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
          <option value="6">6</option>
          <option value="7">7</option>
          <option value="8">8</option>
          <option value="9">9</option>
          <option value="10">10</option>
        </select><br/>
        <span id="product"><b>Dodge: </b></span>
        <select id="dodge" name="product3">
          <option value="<?php $_SESSION['product3']?>" selected><?php echo $_SESSION['product3'];?></option>
          <option value="0">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
          </select><br/><br/><br/>

         <div>
          Address: <input type="text" name="address"><br/><br/>
          City: <input type="text" name="city"><br/><br/>
          State: <input type="text" name="state"><br/><br/>
          Zip: <input type="text" name="zip"><br/><br/>
      	</div>
          <input type="submit" id="submitButton" name="placeOrder" value="Check Out">
  </form>

  	<hr/>
				 
	<footer>
		<table><tr><th><a href="#top">Top of page</a></th></tr></table>
	</footer>

	<br/>
	<a id="bottom"></a> 

</body>
</html>
