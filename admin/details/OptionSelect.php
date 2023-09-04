<?php
session_start();
include("../../database/db.php");
?>
<html>

<head>
    <link rel="stylesheet" href="../../assets/table.css">
    <title>Selection list</title>
    <link rel="icon" href="../../assets/logo.png">
</head>

<body>
    <h1 style="text-align: center; margin-top: 5%;">Option Wise Selection List</h1>
    <?php
    $course = mysqli_query($con, "SELECT * FROM idc_course");
    while ($courseRows = mysqli_fetch_array($course)) {
        $Course = $courseRows['course'];
        $courseID = $courseRows['id'];
        echo "<h3 style='margin-top:2%;'> COURSE : " . $Course . "</h3>";
    ?>
        <div>

            <table class="content-table" style="margin-left: 5%;">
                <thead>
                    <tr>
                        <th>S No.</th>
                        <th>D No.</th>
                        <th>Mark</th>
                        <th>Department </th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    courseResult($con, "subject1", $courseID)
                    ?>
                </tbody>
            </table>

            <table class="content-table">
                <thead>
                    <tr>
                        <th>S No.</th>
                        <th>D No.</th>
                        <th>Mark</th>
                        <th>Department</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    courseResult($con, "subject2", $courseID)
                    ?>
                </tbody>
            </table>


            <table class="content-table">
                <thead>
                    <tr>
                        <th>S No.</th>
                        <th>D No.</th>
                        <th>Mark</th>
                        <th>Department</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    courseResult($con, "subject3", $courseID)
                    ?>
                </tbody>
            </table>
        </div>
    <?php
        echo "<hr style='border 1px solid black'> <br>";
    }
    ?>
</body>

</html>

<?php
function courseResult($con, $option, $courseID)
{
    $count = 1;
    $result = mysqli_query($con, "SELECT * FROM idc_result WHERE $option = $courseID AND allocate = $courseID ORDER BY attendence desc");
    while ($resultRows = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>" . $count . "</td>";
        echo "<td>" . $resultRows['dno'] . "</td>";
        echo "<td>" . $resultRows['attendence'] . "</td>";
        echo "<td>" . $resultRows['dept_name'] . "</td>";
        echo "</tr>";
        $count++;
    }
}
?>