<?php
session_start();
include("../../database/db.php");


function update($con, $courseID, $dno, $branch)
{
    $sel = mysqli_query($con, "SELECT * FROM idc_result WHERE previous = 2");
    $row = mysqli_num_rows($sel);
    $artorsci = "previous";
    if ($row == 0) {
        $artorsci = "current";
    }
    mysqli_query($con, "UPDATE idc_result SET allocate = $courseID, $artorsci = $branch WHERE dno='$dno'");
    $rows = mysqli_affected_rows($con);
    if ($rows != 1) {
        $_SESSION['error'] = "Unable to allocate course. Please Try Again Later!!!!.";
    }
}

function courseResult($con, $option, $courseID,  $strength, $branch)
{
    $result = mysqli_query($con, "SELECT * FROM idc_result WHERE " . $option . "=" . $courseID . " AND allocate = 0 ORDER BY attendence desc LIMIT " . $strength);
    while ($resultRows = mysqli_fetch_array($result)) {
        update($con, $courseID, $resultRows['dno'], $branch);
    }
}

function course($con, $option, $value)
{
    $course = mysqli_query($con, "SELECT * FROM idc_course");
    while ($courseRows = mysqli_fetch_array($course)) {
        $courseID = $courseRows['id'];
        $strength = $courseRows['number'];
        $branch = 0;
        if ($value == 1) {
            $branch = $courseRows['artorsci'];
            $_SESSION['branch'] = $value;
        }
        $result = mysqli_query($con, "SELECT * FROM idc_result WHERE allocate =" . $courseID);
        $count = mysqli_num_rows($result);
        if ($count < $strength) {
            $strength = $strength - $count;
            courseResult($con, $option, $courseID,  $strength, $branch);
        }
    }
}

if (isset($_GET['start'])) {
    $value = $_GET['start'];
    echo $value;
    course($con, "subject1", $value);
    course($con, "subject2", $value);
    course($con, "subject3", $value);
    $_SESSION['error'] = "Course Alloted Successfully.";
    header("location:../AllotmentList.php");
}
