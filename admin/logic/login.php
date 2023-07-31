<?php
session_start();
// for login
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

// for logout 
if (isset($_GET['logout'])) {
    unset($_SESSION["id"]);
    if (!isset($_SESSION['id'])) {
        header("location: ../../index.php");
    }
}

// to change shift 1 and shift 2 database
if (isset($_GET['shift_change'])) {
    $_SESSION['shift'] = $_SESSION['shift'] == $_COOKIE['shift_1'] ? $_COOKIE['shift_2'] : $_COOKIE['shift_1'];
    header("location: ../index.php");
}


// to set database username, password and shift 1 and 2 values in cookies
if (isset($_POST['Check'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $shift_1 = $_POST['shift_1'];
    $shift_2 = $_POST['shift_2'];
    $userHash = openssl_encrypt(
        $username,
        "AES-128-CTR",
        "SJCAdmin",
        0,
        "1234567891011121"
    );
    $passwordHash = openssl_encrypt(
        $password,
        "AES-128-CTR",
        "SJCAdmin",
        0,
        "1234567891011121"
    );
    setcookie("username", $userHash, time() + (86400 * 30), "/"); // 86400 = 1 day
    setcookie("password", $passwordHash, time() + (86400 * 30), "/"); // 86400 = 1 day
    setcookie("shift_1", $shift_1, time() + (86400 * 30), "/"); // 86400 = 1 day
    setcookie("shift_2", $shift_2, time() + (86400 * 30), "/"); // 86400 = 1 day
    header("location: ../../index.php");
}
