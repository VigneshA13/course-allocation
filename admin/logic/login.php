<?php
include("../../database/db.php");
if (isset($_POST["login_submit"])) {
    $name = $_POST["username"];
    $password = $_POST["password"];
    $sel = mysqli_query($con, "SELECT * FROM admin WHERE name='$name' AND password='$password'");
    $row = mysqli_num_rows($sel);
    echo $row;
    if ($row == 1) {
        $_SESSION['id'] = "Admin123";
        header("location: ../index.php");
    } else {
        echo "invalid password";
    }
}

if (isset($_GET['logout'])) {
    unset($_SESSION["id"]);
    if (!isset($_SESSION['id'])) {
        header("location: ../../index.php");
    }
}
