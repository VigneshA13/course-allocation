<?php
include("../database/db.php");
require "../assets/dompdf/autoload.inc.php";
if (!isset($_SESSION['id'])) {
    header("location: ../index.php");
}

use Dompdf\Dompdf;

$count = 1;

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
                <td>S No.</td>
                <td>D No.</td>
                <td>Option 1</td>
                <td>Option 2</td>
                <td>Option 3</td>
                <td>Alloted Course</td>
            </tr>
        </thead>
        <tbody>";

while ($result = mysqli_fetch_array($select)) {
    $html .= "
    <tr>
        <td>" . $result['sid'] . "</td>
        <td>" . $result['dno'] . "</td>
        <td>" . courseName($con, $result['subject1']) . "</td>
        <td>" . courseName($con, $result['subject2']) . "</td>
        <td>" . courseName($con, $result['subject3']) . "</td>
        <td>" . courseName($con, $result['allocate']) . "</td>
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

function courseName($con, $option)
{
    if ($option != 0) {
        $sel = mysqli_query($con, "SELECT * FROM idc_course WHERE id = $option");
        $CourseName = mysqli_fetch_array($sel);
        return $CourseName['course'];
    }
    return $option;
}
