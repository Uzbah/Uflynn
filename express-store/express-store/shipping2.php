<?php
$country = $_POST["country"];
$street = $_POST["street"];
$apt = $_POST["apt"];
$postal = $_POST["postal"];
$city = $_POST["city"];
$state = $_POST["state"];

session_start();
if(!isset($_SESSION['loggedin'])) {
    header("Location: ./login.html");
    exit();
}

$acc_email = $_SESSION["email"];

$conn = mysqli_connect("localhost", "root", "", "express_store");
$res=mysqli_query($conn, "INSERT INTO shipping VALUES('', '$country', '$street', '$apt','$postal', '$city', '$state', '$acc_email')");
mysqli_close($conn);
header("Location: ./payment.php");
exit();
?>