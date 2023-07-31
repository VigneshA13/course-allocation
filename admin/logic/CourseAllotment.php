<?php
session_start();
include("../../database/db.php");


function update($con, $courseID, $dno)
{
    mysqli_query($con, "UPDATE idc_result SET allocate = $courseID WHERE dno='$dno'");
    $rows = mysqli_affected_rows($con);
    if ($rows != 1) {
        echo "error";
    }
}

function courseResult($con, $option, $courseID,  $strength)
{
    $result = mysqli_query($con, "SELECT * FROM idc_result WHERE " . $option . "=" . $courseID . " AND allocate = 0 ORDER BY attendence desc LIMIT " . $strength);
    while ($resultRows = mysqli_fetch_array($result)) {
        update($con, $courseID, $resultRows['dno']);
    }
}

function course($con, $option)
{
    $course = mysqli_query($con, "SELECT * FROM idc_course");
    while ($courseRows = mysqli_fetch_array($course)) {
        $courseID = $courseRows['id'];
        $strength = $courseRows['number'];
        $result = mysqli_query($con, "SELECT * FROM idc_result WHERE allocate =" . $courseID);
        $count = mysqli_num_rows($result);
        if ($count < $strength) {
            $strength = $strength - $count;
            courseResult($con, $option, $courseID,  $strength);
        }
    }
}

if (isset($_GET['start'])) {
    course($con, "subject1");
    course($con, "subject2");
    course($con, "subject3");
    header("location:../AllotmentList.php");
}
