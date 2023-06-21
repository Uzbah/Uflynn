<?php
$color = $_POST["color"];
$waist = $_POST["waist-size"];
$length = $_POST["length"];
$size = $_POST["size"];
$img = $_POST["img"];

session_start();
if(!isset($_SESSION['loggedin'])) {
    header("Location: ./login.html");
    exit();
}

$acc_email = $_SESSION["email"];

$conn = mysqli_connect("localhost", "root", "", "express_store");
$prodid=mysqli_fetch_array(mysqli_query($conn, "SELECT id FROM product WHERE image='$img'"));
$prodid=$prodid['id'];
mysqli_query($conn, "INSERT INTO order_details VALUES('', '$color', '$waist', '$length', '$size', '$prodid', '$acc_email')");
mysqli_close($conn);
echo "<script>window.location.href='./cart.php'</script>";
?>