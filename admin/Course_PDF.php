<?php
session_start();
include("../database/db.php");
require "../assets/dompdf/autoload.inc.php";
if (!isset($_SESSION['id'])) {
    header("location: ../index.php");
}

use Dompdf\Dompdf;

$html = "
<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Course Allocation List</title>
    <link rel='icon' href='../assets/logo.png'>
    <style>
        h1 {
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            text-align: center;
        }
        h2 {
            margin-top : 10px;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            text-align: left;
            
        }
        span {
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            float: right;
            font-size : 18px;
        }
        div{
            border: 1px solid black;
            
        }
    table,
        th,
        td {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
        }
        td{
            padding: 3px;
        }
    </style>
</head>

<body><h1>Course Allotment List</h1>";
$course = mysqli_query($con, "SELECT * FROM idc_course ORDER BY number desc");
while ($courseResult = mysqli_fetch_array($course)) {
    $courseID = $courseResult['id'];
    $courseName = $courseResult['course'];

    $student = mysqli_query($con, "SELECT * FROM idc_result WHERE allocate = $courseID");
    $strength = mysqli_num_rows($student);
    $html .= "<br><br><br>    
    <h2 >" . $courseName . " <span>Strength : " . $strength . " </span></h2>
    
    <div>
    <table>
        ";

    $count = 1;
    while ($result = mysqli_fetch_assoc($student)) {
        if ($count == 1) {
            $html .= "<tr>";
        }
        $html .= "<td style='text-align: center;'>" . $result['dno'] . "</td>";
        if ($count == 12) {
            $count = 0;
            $html .= "</tr>";
        }
        $count++;
    }

    $html .= "
            
            </table>
            </div>
            ";
}
$html .= "</body></html>";

$dompdf = new Dompdf();
$dompdf->loadHtml($html);

$dompdf->setPaper('A4', 'landscape');
$dompdf->render();
$dompdf->stream('Course_Allocationlist.pdf', ["Attachment" => 0]);
