<?php
include("../../database/db.php");

function allot($con)
{
    $dept = mysqli_query($con, "SELECT * FROM idc_dept");
    while ($result = mysqli_fetch_array($dept)) {
        $deptName = $result['dept_name'];
        $student = mysqli_query($con, "SELECT * FROM idc_result WHERE dept_name = '$deptName' AND allocate = 0 ORDER BY dno");
        while ($studentResult = mysqli_fetch_array($student)) {
            course($con, $studentResult['dno'], $studentResult['dept_name']);
        }
    }
}


function course($con, $dno, $deptName)
{
    $sel = mysqli_query($con, "SELECT * FROM idc_course WHERE dept_name != '$deptName'");
    while ($Result = mysqli_fetch_array($sel)) {
        $Strength = $Result['number'];
        $courseID = $Result['id'];
        $stud =  mysqli_query($con, "SELECT * FROM idc_result WHERE allocate = '$courseID'");
        $row = mysqli_num_rows($stud);
        $balanceSeat = $Strength - $row;
        if ($balanceSeat != 0) {
            update($con, $dno, $courseID);
        }
    }
}

function update($con, $dno, $courseID)
{
    $stud = mysqli_query($con, "SELECT * FROM idc_result WHERE dno = '$dno'");
    $result = mysqli_fetch_array($stud);
    if ($result['allocate'] == 0) {
        mysqli_query($con, "UPDATE idc_result SET allocate = $courseID WHERE dno = '$dno'");
        $row = mysqli_affected_rows($con);
        if ($row != 1) {
            echo "error";
        }
    }
}

if (isset($_GET['allotment_start'])) {
    $sel = mysqli_query($con, "SELECT * FROM idc_result WHERE allocate = 0");
    $rows = mysqli_num_rows($sel);
    if ($rows > 0) {
        allot($con);
    }
    header("location:../index.php");
}
