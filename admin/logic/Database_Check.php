<?php
session_start();
// to set database username, password values in cookies
if (isset($_POST['Check'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $password = $password == "  " ? "" : $password;
    try {
        $conn = mysqli_connect("localhost", $username, $password);
        $userHash = openssl_encrypt(
            $username,
            "AES-128-CTR",
            "SJCAdmin",
            0,
            "1234567891011121"
        );
        $password = $password == "" ? " " : $password;
        $passwordHash = openssl_encrypt(
            $password,
            "AES-128-CTR",
            "SJCAdmin",
            0,
            "1234567891011121"
        );
        setcookie("username", $userHash, time() + (86400 * 30), "/"); // 86400 = 1 day
        setcookie("password", $passwordHash, time() + (86400 * 30), "/"); // 86400 = 1 day

        $temp = mysqli_query($conn, "SELECT SCHEMA_NAME FROM INFORMATION_SCHEMA.SCHEMATA WHERE SCHEMA_NAME = 'shift1'");
        $row = mysqli_num_rows($temp);

        if ($row == 0) {
            CreateDatabase($conn, "shift1");
        }
        $dbname2 = 'shift2_' . $sem . '_' . $year;

        $temp = mysqli_query($conn, "SELECT SCHEMA_NAME FROM INFORMATION_SCHEMA.SCHEMATA WHERE SCHEMA_NAME = 'shift2'");
        $row = mysqli_num_rows($temp);

        if ($row == 0) {
            CreateDatabase($conn, "shift2");
        }

        $_SESSION['error'] = "Successfully login into Localhost !!!";
        header("location: ../../Data.php");
    } catch (Exception $error) {
        $_SESSION['error'] = "Invalid Database Username or Password !!!";
        header("location: ../../Loader.php");
    }
}
function CreateDatabase($con, $database)
{
    try {
        $shift = $database == "shift1" ? 1 : 2;

        mysqli_query($con, "CREATE DATABASE $database");
        $con = mysqli_connect("localhost", "root", "", $database);

        mysqli_query($con, "CREATE TABLE admin (id INT(6) AUTO_INCREMENT PRIMARY KEY, name VARCHAR(30) NOT NULL, password VARCHAR(30) NOT NULL)");
        mysqli_query($con, "INSERT INTO admin(name, password) VALUES('mani', '123')");

        mysqli_query($con, "CREATE TABLE idc_course (id INT(6) AUTO_INCREMENT PRIMARY KEY, course VARCHAR(50) NOT NULL, 
        dept_name VARCHAR(30) NOT NULL, staff VARCHAR(40) DEFAULT 'none', artorsci INT(3) NOT NULL, shift INT(1) DEFAULT $shift, number INT(5) NOT NULL)");

        mysqli_query($con, "CREATE TABLE idc_dept (sno INT(6) AUTO_INCREMENT PRIMARY KEY, dept_name VARCHAR(30) NOT NULL)");

        mysqli_query($con, "CREATE TABLE idc_result (sid INT(6) AUTO_INCREMENT PRIMARY KEY, dno VARCHAR(30) NOT NULL UNIQUE,name  VARCHAR(30) NOT NULL, 
        subject1 INT(3) DEFAULT 0, subject2 INT(3) DEFAULT 0, subject3 INT(3) DEFAULT 0, date DATE , time TIME, previous INT(3) DEFAULT 2, current INT(3) DEFAULT 2,
        status INT(3) DEFAULT 0, attendence INT(6) NOT NULL, allocate INT(5) DEFAULT 0, atstatus VARCHAR(10) NULL, dept_name VARCHAR(50) NOT NULL, graduate VARCHAR(10) DEFAULT 'UG',
        shift INT(1) DEFAULT $shift)");
    } catch (error) {
        $_SESSION['error'] = "Tables Are Not Created !!!";
        header("location: ../../Data.php");
    }
}
