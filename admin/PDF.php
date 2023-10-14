<?php
session_start();
include("../database/db.php");
require "../assets/dompdf/autoload.inc.php";
if (!isset($_SESSION['id'])) {
    header("location: ../index.php");
}

use Dompdf\Dompdf;

$course = mysqli_query($con, "SELECT * FROM idc_course");

while ($courseResult = mysqli_fetch_array($course)) {
    $courseID = $courseResult['id'];
    $_SESSION["id_$courseID"] = $courseResult['course'];
}


$select = mysqli_query($con, "SELECT * FROM idc_result ORDER BY dno");

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
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            text-align: left;
        }

        table {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td,
        th {
            border: 1px solid black;
            padding: 8px;
        }
    </style>
</head>

<body>
    <h1>Course Allotment List</h1>
    <table>
        <thead>
            <tr>
                <td style='font-weight:bold;'>S No.</td>
                <td style='font-weight:bold;'>D No.</td>
                <td style='font-weight:bold;'>Option 1</td>
                <td style='font-weight:bold;'>Option 2</td>
                <td style='font-weight:bold;'>Option 3</td>
                <td style='font-weight:bold;'>Alloted Course</td>
            </tr>
        </thead>
        <tbody>";

while ($result = mysqli_fetch_array($select)) {
    $option1 = $result['subject1'];
    $option2 = $result['subject2'];
    $option3 = $result['subject3'];
    $alloted = $result['allocate'];
    $html .= "
    <tr>
        <td>" . $result['sid'] . "</td>
        <td>" . $result['dno'] . "</td>
        <td>" . ($option1 == 0 ? $option1 : $_SESSION["id_$option1"])  . "</td>
        <td>" . ($option2 == 0 ? $option2 : $_SESSION["id_$option2"]) . "</td>
        <td>" . ($option3 == 0 ? $option3 : $_SESSION["id_$option3"]) . "</td>
        <td>" . $_SESSION["id_$alloted"] . "</td>
    </tr>";
}

$html .= "
</tbody>
</table>
</body>
</html>";

$dompdf = new Dompdf();
$dompdf->loadHtml($html);

$dompdf->setPaper('A4', 'landscape');
$dompdf->render();
$dompdf->stream('Course_Allocationlist.pdf', ["Attachment" => 0]);
