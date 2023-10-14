<?php
session_start();
if (!isset($_SESSION['id'])) {
    header("location: ../index.php");
}
include("../database/db.php");
header("Content-Type: text/plain");
header('Content-Disposition: attachement; filename="report.csv"');

if (isset($_GET['excel'])) {
    $course = mysqli_query($con, "SELECT * FROM idc_course ORDER BY number desc");
    while ($courseResult = mysqli_fetch_array($course)) {
        $courseID = $courseResult['id'];
        $courseName = $courseResult['course'];

        $student = mysqli_query($con, "SELECT * FROM idc_result WHERE allocate = $courseID");
        $strength = mysqli_num_rows($student);
        $val = $strength;
        if ($strength > 100) {
            $val = $strength / 2;
        }
        if ($strength > 150) {
            $val =  $strength / 3;
        }
        if ($strength > 200) {
            $val =  $strength / 4;
        }
        echo $courseName . "\t Strength :" . $strength . "\n";
        $count = 1;
        $temp = 1;
        while ($result = mysqli_fetch_assoc($student)) {
            if ($temp == $val + 1) {
                $temp = 1;
                $count = 1;
                echo "\n";
                echo "\n";
            }
            echo  $result['dno'] . ",";
            $count++;
            if ($count == 11) {
                $count = 1;
                echo "\n";
            }
            $temp++;
        }
        echo "\n";
        echo "\n";
    }
    header("location: index.php");
}
