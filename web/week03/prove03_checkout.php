<html>
<head>
<meta charset="utf-8">
<link href="../index.css" rel="stylesheet" type="text/css">
<link href="prove03.css" rel="stylesheet" type="text/css">
</head>

<body>
    <a id="top"></a>
        <h1>Confirm your order</h1>
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

<div><a href="prove03.php">Edit order details</a></div><br/>

<?php
session_start();
    if (isset($_POST['product1'])) {
        $_SESSION['product1'] = $_POST['product1'];
    }
    if (isset($_POST['product2'])) {
        $_SESSION['product2'] = $_POST['product2'];
    }
    if (isset($_POST['product3'])) {
        $_SESSION['product3'] = $_POST['product3'];
    }
function senitizeData($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    $data = filter_var($data, FILTER_SANITIZE_SPECIAL_CHARS, FILTER_FLAG_STRIP_HIGH);
    $data = filter_var($data, FILTER_SANITIZE_SPECIAL_CHARS, FILTER_FLAG_STRIP_LOW);
    return $data;
}
$address = senitizeData($_POST['address']);
$city    = senitizeData($_POST['city']);
$state   = senitizeData($_POST['state']);

if (preg_match('^\d{5}$^', $_POST['zip'])) {
    $zip = $_POST['zip'];
} else {
    echo "<div>your zip code is invalid </div><br/>";
}
?>

<form action="prove03_confirm.php" method="post" id="form">
<input type="submit" id="submitButton" name="confirmOrder" value="Confirm Order">
</form>

<?php
$_SESSION['address'] = $address;
$_SESSION['city']    = $city;
$_SESSION['state']   = $state;
$_SESSION['zip']     = $zip;
echo "<div>";
echo "You have purchased " . $_SESSION['product1'] . " Toyota" . "<br/>";
echo "You have purchased " . $_SESSION['product2'] . " Ford" . "<br/>";
echo "You have purchased " . $_SESSION['product3'] . " Dodge" . "<br/>";

echo "<br/><p> Shipping to: </p><br/>";

echo "Address: " . $address . "<br/>";
echo "City: " . $city . "<br/>";
echo "State: " . $state . "<br/>";
echo "Zip: " . $zip . "<br/>";
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

