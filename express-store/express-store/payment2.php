<?php
$cred = $_POST["cred"];
$expm = $_POST["expm"];
$expy = $_POST["expy"];
$cvv = $_POST["cvv"];

session_start();
if(!isset($_SESSION['loggedin'])) {
    header("Location: ./login.html");
    exit();
}

$acc_email = $_SESSION["email"];

$conn = mysqli_connect("localhost", "root", "", "express_store");
$res=mysqli_query($conn, "INSERT INTO payment VALUES('$cred', '$expm', '$expy', '$cvv', '$acc_email')");
mysqli_close($conn);
header("Location: ./orderpage.php");
exit();
?>