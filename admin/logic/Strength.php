<?php
session_start();
include("../../database/db.php");
if (isset($_GET['check1'])) {
    $course = mysqli_query($con, "SELECT * FROM idc_course WHERE number < 40");
    if (mysqli_num_rows($course) > 0) {
        while ($row = mysqli_fetch_assoc($course)) {
            $courseID = $row['id'];
            $bal = 40 - $row['number'];
            $strength = $row['number'] + $bal;
            mysqli_query($con, "UPDATE idc_course SET number = $strength WHERE id=$courseID");
            $rows = mysqli_affected_rows($con);
            if ($rows != 1) {
                $_SESSION['error'] = "Unable to allocate course. Please Try Again Later!!!!.";
            }
        }
    }

    $courseStrength = 0;
    $courses = mysqli_query($con, "SELECT * FROM idc_course");
    $count = mysqli_num_rows($courses);
    while ($courseRow = mysqli_fetch_assoc($courses)) {
        $courseStrength = $courseStrength + $courseRow['number'];
    }
    echo "course strength = " . $courseStrength . "<br>";

    $student = mysqli_query($con, "SELECT * FROM idc_result");
    $studentStrength = mysqli_num_rows($student);
    echo "student strength = " . $studentStrength . "<br>";

    if ($courseStrength < $studentStrength) {
        $bal = $studentStrength - $courseStrength;
        $bal_student = floor($bal / $count) + 1;
        $add_course = mysqli_query($con, "SELECT * FROM idc_course");
        while ($courseResult = mysqli_fetch_assoc($add_course)) {
            $ID = $courseResult['id'];
            $Result = $bal_student + $courseResult['number'];
            mysqli_query($con, "UPDATE idc_course SET number = $Result WHERE id = $ID");
            $rows = mysqli_affected_rows($con);
            if ($rows != 1) {
                $_SESSION['error'] = "Unable to allocate course. Please Try Again Later!!!!.";
            }
        }
    }
    header("location: ArtsOrScience.php?check2=check2");
} else {
    header("location: ../Index.php");
}
