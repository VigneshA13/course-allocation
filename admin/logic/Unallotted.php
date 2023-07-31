<?php
session_start();
include("../../database/db.php");
if (isset($_GET['unallotment_start'])) {
    $stud = mysqli_query($con, "SELECT * FROM idc_result WHERE allocate = 0");
    while ($student = mysqli_fetch_array($stud)) {
        $dno = $student['dno'];
        $studentDept = $student['dept_name'];
        // echo $student['dno'] . " --------- " . $student['dept_name'] . "<br>";
        $course = mysqli_query($con, "SELECT * FROM idc_course WHERE dept_name != '$studentDept' ORDER BY number DESC");
        while ($courseResult = mysqli_fetch_array($course)) {
            $courseID = $courseResult['id'];
            $strength = $courseResult['number'];
            $sel = mysqli_query($con, "SELECT * FROM idc_result WHERE allocate = $courseID");
            $allotedCount = mysqli_num_rows($sel);
            $balance = $strength - $allotedCount;
            if ($balance > 0) {
                $check = mysqli_query($con, "SELECT * FROM idc_result WHERE dno = '$dno' AND allocate = 0");
                $checkResult = mysqli_num_rows($check);
                if ($checkResult == 1) {
                    mysqli_query($con, "UPDATE idc_result SET allocate = $courseID WHERE dno = '$dno'");
                    $row = mysqli_affected_rows($con);
                    if ($row != 1) {
                        echo "error";
                    }
                }
            }
        }
    }
    header("location:../index.php");
}
