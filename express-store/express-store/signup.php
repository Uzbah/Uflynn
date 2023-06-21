<?php
$name = $_POST["name"];
$phone = $_POST["phone"];
$email = $_POST["email"];
$pass = $_POST["pass"];

$conn = mysqli_connect("localhost", "root", "", "express_store");
$res=mysqli_query($conn, "SELECT * FROM account WHERE Email='$email'");
if (mysqli_num_rows($res) != 0) {
    echo "<script>alert('Email already exists');window.location.href='./signup.html'</script>";
}
else {
    mysqli_query($conn, "INSERT INTO account VALUES('$name', '$phone', '$email', '$pass')");
    mysqli_close($conn);
    echo "<script>window.location.href='./login.html'</script>";
}
?>
