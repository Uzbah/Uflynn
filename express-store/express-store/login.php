<?php
$email = $_POST["email"];
$pass = $_POST["pass"];

$conn = mysqli_connect("localhost", "root", "", "express_store");
$res = mysqli_query($conn, "SELECT * FROM account WHERE Email='$email' AND Password='$pass'");
if (mysqli_num_rows($res) != 0) {
    session_start();
    $r = mysqli_fetch_array($res);
    $_SESSION['loggedin'] = true;
    $_SESSION['email'] = $r['Email'];
    $_SESSION['user'] = $r['Full Name'];
    if ($_SESSION['loggedin']) {
        echo "<script>alert('Login successful');window.location.href='./index.php';</script>";
    }
} else {
    echo "<script>alert('Email or password is invalid');window.location.href='./login.html'</script>";
}
mysqli_close($conn);
