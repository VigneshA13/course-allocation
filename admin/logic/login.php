<?php
session_start();
// for login
include("../../database/db.php");
if (isset($_POST["login_submit"])) {
    $name = $_POST["username"];
    $password = $_POST["password"];
    $sel = mysqli_query($con, "SELECT * FROM admin WHERE name='$name' AND password='$password'");
    $row = mysqli_num_rows($sel);

    if ($row == 1) {
        $_SESSION['id'] = "Admin123";
        header("location: ./Strength.php?check1=check1");
    } else {
        $_SESSION['error'] = "Invalid Username or Password!!!";
        header("location: ../../index.php");
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
    $_SESSION['shift'] = $_SESSION['shift'] == "shift1" ? "shift2" : "shift1";
    $_SESSION['error'] = "Successfully changed to " . $_SESSION['shift'];
    header("location: ../index.php");
}

//for Reset the alloted course List
if (isset($_GET['reset'])) {
    mysqli_query($con, "UPDATE idc_result SET allocate = 0, current = 2");
    $rows = mysqli_affected_rows($con);
    if ($rows < 1) {
        $_SESSION['error'] = "Unable to reset the alloted List. PLEASE TRY AGAIN LATER !!!";
        header("location: ../index.php");
    }
    $_SESSION['error'] = "Course Alloted List Successfully Reset.";
    header("location: ../index.php");
}

//for Change password
if (isset($_POST['pass_change'])) {
    $password = $_POST["pass"];
    $Cpassword = $_POST["cpass"];

    if ($password != $Cpassword) {
        $_SESSION['error'] = "Password And Confirm Password Does Not Match!!!";
        header("location: ../changepassword.php?change=change");
    }
    mysqli_query($con, "UPDATE admin SET password = '$password'");
    $rows = mysqli_affected_rows($con);
    if ($rows != 1) {
        $_SESSION['error'] = "Unable to reset Your Password. PLEASE TRY AGAIN LATER !!!";
        header("location: ../index.php");
    }
    $_SESSION['error'] = "Password Reset Successfully.";
    unset($_SESSION['id']);
    header("location: ../../index.php");
}

// for upload student selected course details
if (isset($_POST['stud_data'])) {
    $file = fopen($filename, "r");
    $temp = fgetcsv($file);
    while (($data = fgetcsv($file, 10000, ",")) !== FALSE) {

        $sql = "UPDATE idc_result SET subject1 = $data[1], subject2 = $data[2], subject3 = $data[3], status, attendence, dept_name, graduate) values('$data[0]', '$data[1]', $data[2], $data[3], $data[4], $data[5], '$data[6]', '$data[7]')";
        if (!mysqli_query($con, $sql)) {
            $_SESSION['error'] = "Unable to upload data. Please Try Again Later !!!";
            mysqli_query($con, "TRUNCATE TABLE idc_dept");
            header("location: Data.php");
        }
    }
    fclose($file);
}
