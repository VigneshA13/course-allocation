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
    // create con variable using shift 1 database name has default 
    $con = mysqli_connect("localhost", $user, $pass, $_SESSION['shift']);
} catch (Exception $e) {
    //if database username, password, shift 1 and shift 2 database name incorrect 
    // then removing that values from cookies
    setcookie('username', '', -1, '/');
    setcookie('password', '', -1, '/');
    header("location: Loader.php");
}
