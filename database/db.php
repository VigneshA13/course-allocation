<?php
//decrypting the database username and password from cookies
$user = openssl_decrypt(
    $_COOKIE['username'],
    "AES-128-CTR",
    "SJCAdmin",
    0,
    "1234567891011121"
);
$pass = openssl_decrypt(
    $_COOKIE['password'],
    "AES-128-CTR",
    "SJCAdmin",
    0,
    "1234567891011121"
);
$pass = $pass == " " ? "" : $pass;
try {
    //checking weather the database username, password, shift 1 and shift 2 database name correct
    $temp = mysqli_connect("localhost", $user, $pass, $_COOKIE['shift_1']);
    mysqli_query($temp, "SELECT * FROM admin");
    mysqli_query($temp, "SELECT * FROM idc_course");
    mysqli_query($temp, "SELECT * FROM idc_dept");
    mysqli_query($temp, "SELECT * FROM idc_result");
    $temp = mysqli_connect("localhost", $user, $pass, $_COOKIE['shift_2']);
    mysqli_query($temp, "SELECT * FROM admin");
    mysqli_query($temp, "SELECT * FROM idc_course");
    mysqli_query($temp, "SELECT * FROM idc_dept");
    mysqli_query($temp, "SELECT * FROM idc_result");

    // create con variable using shift 1 database name has default 

    $con = mysqli_connect("localhost", $user, $pass, $_SESSION['shift']);
} catch (Exception $e) {
    //if database username, password, shift 1 and shift 2 database name incorrect 
    // then removing that values from cookies
    setcookie('username', '', -1, '/');
    setcookie('password', '', -1, '/');
    setcookie('shift_1', '', -1, '/');
    setcookie('shift_2', '', -1, '/');
    header("location: Loader.php");
}
