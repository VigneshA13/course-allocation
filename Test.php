<?php
session_start();

$_SESSION['shift'] = 'shift1';
include("./database/db.php");
if (isset($_POST['department'])) {

    $filename = $_FILES["file"]["tmp_name"];
    department($con, $filename);

    $_SESSION['shift'] = 'shift2';
    include("./database/db.php");
    $filename = $_FILES["file2"]["tmp_name"];
    department($con, $filename);

    $_SESSION['error'] = "CSV File has been successfully Imported.";
    header("location: Data.php");
}

if (isset($_POST['course'])) {

    $filename = $_FILES["file"]["tmp_name"];
    course($con, $filename);

    $_SESSION['shift'] = 'shift2';
    include("./database/db.php");
    $filename = $_FILES["file2"]["tmp_name"];
    course($con, $filename);

    $_SESSION['error'] = "CSV File has been successfully Imported.";
    header("location: Data.php");
}


if (isset($_POST['student'])) {

    $filename = $_FILES["file"]["tmp_name"];
    student($con, $filename);

    $_SESSION['shift'] = 'shift2';
    include("./database/db.php");
    $filename = $_FILES["file2"]["tmp_name"];
    student($con, $filename);


    $_SESSION['error'] = "CSV File has been successfully Imported.";
    header("location: Data.php");
}
function student($con, $filename)
{
    $file = fopen($filename, "r");
    $temp = fgetcsv($file);


    while (($data = fgetcsv($file, 10000, ",")) !== FALSE) {
        $sql = "INSERT into idc_result(dno, name, subject1, subject2, subject3, status, attendence, dept_name, graduate) values('$data[0]', '$data[1]', $data[2], $data[3], $data[4], $data[5], '$data[6]', '$data[7]')";
        if (!mysqli_query($con, $sql)) {
            $_SESSION['error'] = "Unable to upload data. Please Try Again Later !!!";
            mysqli_query($con, "TRUNCATE TABLE idc_dept");
            header("location: Data.php");
        }
        //     $sql = "INSERT into idc_result(dno, name, attendence, dept_name, graduate) values('$data[0]', '$data[1]', $data[2], '$data[3]', '$data[4]')";
        //     if (!mysqli_query($con, $sql)) {
        //         $_SESSION['error'] = "Unable to upload data. Please Try Again Later !!!";
        //         mysqli_query($con, "TRUNCATE TABLE idc_dept");
        //         header("location: Data.php");
        //     }
    }
    fclose($file);
}

// code to insert into department table (idc_dept)
function department($con, $filename)
{
    $file = fopen($filename, "r");
    fgetcsv($file);
    while (($data = fgetcsv($file, 10000, ",")) !== FALSE) {
        $sql = "INSERT into idc_dept(dept_name) values('$data[0]')";
        if (!mysqli_query($con, $sql)) {
            $_SESSION['error'] = "Unable to upload data. Please Try Again Later !!!";
            mysqli_query($con, "TRUNCATE TABLE idc_dept");
            header("location: Data.php");
        }
    }
    fclose($file);
}

// code to insert into Course table (idc_course)
function course($con, $filename)
{
    $file = fopen($filename, "r");
    echo $filename;
    fgetcsv($file);
    while (($data = fgetcsv($file, 10000, ",")) !== FALSE) {
        $sql = "INSERT into idc_course(course, dept_name, staff, artorsci, number) values('$data[0]', '$data[1]', '$data[2]', $data[3], $data[4])";
        if (!mysqli_query($con, $sql)) {
            $_SESSION['error'] = "Unable to upload data. Please Try Again Later !!!";
            mysqli_query($con, "TRUNCATE TABLE idc_dept");
            header("location: Data.php");
        }
    }
    fclose($file);
}
