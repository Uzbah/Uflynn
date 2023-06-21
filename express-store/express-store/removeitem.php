<?php
$id = $_GET["id"];

$conn = mysqli_connect("localhost", "root", "", "express_store");
mysqli_query($conn, "DELETE FROM order_details WHERE id='$id'");
mysqli_close($conn);
echo "<script>window.location.href='./cart.php'</script>";
?>