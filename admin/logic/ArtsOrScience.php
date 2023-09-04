<?php
session_start();
include("../../database/db.php");

if (isset($_GET['check2'])) {
    seatCheaker($con, 0);
    seatCheaker($con, 1);
    header("location: ../index.php");
} else {
    header("location: ../Index.php");
}


function seatCheaker($con, $artorsci)
{
    $arts = mysqli_query($con, "SELECT * FROM idc_course WHERE artorsci = $artorsci");
    $seat = 0;
    while ($row = mysqli_fetch_assoc($arts)) {
        $seat = $seat + $row['number'];
    }
    echo "seat = " . $seat . "<br>";
    $stud = mysqli_query($con, "SELECT * FROM idc_result WHERE previous = $artorsci");
    $student = mysqli_num_rows($stud);
    echo "student = " . $student . "<br>";
    $balance = 0;
    if ($seat < $student) {
        $balance = $student - $seat;
        echo "balance = " . $balance;

        $course = mysqli_query($con, "SELECT * FROM idc_course WHERE artorsci = $artorsci ORDER BY number");
        $course_count = mysqli_num_rows($course);

        while ($result = mysqli_fetch_assoc($course)) {
            if ($balance <= 0) {
                break;
            }
            $courseID = $result['id'];
            echo "<br> available = " . $result['number'] . "<br>";
            $temp_bal =  60 - $result['number'];

            echo " temp_bal = " . $temp_bal . "<br>";
            if ($temp_bal > 0) {
                $avail_seat = $result['number'] + $temp_bal;
                echo "avail_seat = " . $avail_seat;
                mysqli_query($con, "UPDATE idc_course SET number = $avail_seat WHERE id = $courseID");
                $row = mysqli_affected_rows($con);
                if ($row != 1) {
                    $_SESSION['error'] = "Something went wrong. Please try again Later!!!";
                }
                $balance = $balance - $temp_bal;
                echo "<br>balance2 = " . $balance . "<br>";
            }
        }
    }
    echo "<br>balance32 = " . $balance . "<br>";
    if ($balance > 0) {
        $seats = floor($balance / $course_count) + 1;
        echo "seats = " . $seats . "<br>";
        $courses = mysqli_query($con, "SELECT * FROM idc_course WHERE artorsci = $artorsci ORDER BY number");
        while ($result = mysqli_fetch_assoc($courses)) {
            $course_ID = $result['id'];
            $strength = $result['number'] + $seats;
            echo "strength = " . $strength . "<br>";
            mysqli_query($con, "UPDATE idc_course SET number = $strength WHERE id = $course_ID");
            $row = mysqli_affected_rows($con);
            if ($row != 1) {
                $_SESSION['error'] = "Something went wrong. Please try again Later!!!";
            }
        }
        $balance = 0;
    }
}
