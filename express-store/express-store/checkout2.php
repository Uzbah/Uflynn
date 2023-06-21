<?php
$fname = $_POST["fname"];
$lname = $_POST["lname"];
$email = $_POST["email"];
$phone = $_POST["phone"];

session_start();
if(!isset($_SESSION['loggedin'])) {
    header("Location: ./login.html");
    exit();
}

$acc_email = $_SESSION["email"];

$conn = mysqli_connect("localhost", "root", "", "express_store");
mysqli_query($conn, "INSERT INTO contact_info VALUES('', '$fname', '$lname', '$phone', '$acc_email')");
mysqli_close($conn);
header("Location: ./shipping.php");
?>