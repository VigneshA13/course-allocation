<?php
session_start();
include("../../database/db.php");
?>
<html>

<head>
    <link rel="stylesheet" href="../../assets/table.css">
    <title>Department Wise</title>
    <link rel="icon" href="../../assets/logo.png">
</head>

<body>
    <h1 style="text-align: center; margin-top: 3%;">Student's Department</h1>
    <?php
    $course = mysqli_query($con, "SELECT * FROM idc_course");
    while ($courseRows = mysqli_fetch_array($course)) {
        $Course = $courseRows['course'];
        $courseID = $courseRows['id'];
        $courseDept =  $courseRows['dept_name'];
        echo "<h3 style='margin-top:2%;'> COURSE : " . $Course . "</h3>";
    ?>
        <div style="margin-left: 20vh;">
            <table class=" content-table" style="min-width: 160vh;">
                <thead>
                    <tr>
                        <th>S No.</th>
                        <th>D No.</th>
                        <th>Mark</th>
                        <th>Current Department</th>
                        <th>Alloted Department</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    courseResult($con, $courseID, $courseDept)
                    ?>
                </tbody>
            </table>
        </div>
    <?php
        echo "<hr> <br>";
    }
    ?>
</body>

</html>

<?php
function courseResult($con, $courseID, $courseDept)
{
    $count = 1;
    $result = mysqli_query($con, "SELECT * FROM idc_result WHERE allocate = $courseID ORDER BY dno");
    while ($resultRows = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>" . $count . "</td>";
        echo "<td>" . $resultRows['dno'] . "</td>";
        echo "<td>" . $resultRows['attendence'] . "</td>";
        echo "<td>" . $resultRows['dept_name'] . "</td>";
        echo "<td>" . $courseDept . "</td>";
        echo "</tr>";
        $count++;
    }
}
?>