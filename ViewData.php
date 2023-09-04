<?php
session_start();

$_SESSION['shift'] = 'shift1';
include("./database/db.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .content-table {
            border-collapse: collapse;
            margin: 25px 0;
            font-size: 0.9em;
            min-width: 400px;
            border-radius: 5px 5px 0 0;
            overflow: hidden;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
        }

        .content-table thead tr {
            background-color: #833125;
            color: #ffffff;
            text-align: left;
            font-weight: bold;
        }

        .content-table th,
        .content-table td {
            padding: 12px 15px;
        }

        .content-table tbody tr {
            border-bottom: 1px solid #dddddd;
        }

        .content-table tbody tr:nth-of-type(even) {
            background-color: #f3f3f3;
        }

        .content-table tbody tr:last-of-type {
            border-bottom: 2px solid #833125;

        }

        .button {
            display: inline-block;
            padding: 10px 20px;
            border: 1px solid #4f4f4f;
            border-radius: 10px;
            transition: all 0.2s ease-in;
            position: relative;
            overflow: hidden;
            font-size: 19px;
            color: black;
            z-index: 1;
            float: right;
            margin-right: 5%;
        }

        .button:before {
            content: "";
            position: absolute;
            left: 50%;
            transform: translateX(-50%) scaleY(1) scaleX(1.25);
            top: 100%;
            width: 140%;
            height: 180%;
            background-color: rgba(0, 0, 0, 0.05);
            border-radius: 50%;
            display: block;
            transition: all 0.5s 0.1s cubic-bezier(0.55, 0, 0.1, 1);
            z-index: -1;
        }

        .button:after {
            content: "";
            position: absolute;
            left: 55%;
            transform: translateX(-50%) scaleY(1) scaleX(1.45);
            top: 180%;
            width: 160%;
            height: 190%;
            background-color: #39bda7;
            border-radius: 50%;
            display: block;
            transition: all 0.5s 0.1s cubic-bezier(0.55, 0, 0.1, 1);
            z-index: -1;
        }

        .button:hover {
            color: #ffffff;
            border: 1px solid white;
        }

        .button:hover:before {
            top: -35%;
            background-color: #833125;
            transform: translateX(-50%) scaleY(1.3) scaleX(0.8);
            border-color: white;
        }

        .button:hover:after {
            top: -45%;
            background-color: #833125;
            transform: translateX(-50%) scaleY(1.3) scaleX(0.8);
            border-color: white;
        }
    </style>
</head>

<body>
    <?php if (isset($_REQUEST['department'])) {
    ?>
        <div>
            <!-- Display department -->
            <?php
            $dept = mysqli_query($con, "SELECT * FROM idc_dept");
            $dept_row = mysqli_num_rows($dept);
            if ($dept_row > 0) {

            ?>
                <h2 style="text-align: center;">Department Table(idc_dept)</h2>
                <table class="content-table" style="margin-left:10%; width : 80vh;float:left;">
                    <thead>
                        <tr style="border-bottom: 1px solid white;">
                            <td colspan="2" style="text-align: center;">SHIFT - 1 Departments</td>
                        </tr>
                        <tr>
                            <th>S No.</th>
                            <th>Department Name</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while ($select_dept = mysqli_fetch_array($dept)) {
                        ?>
                            <tr>
                                <td><?php echo $select_dept["sno"]; ?></td>
                                <td><?php echo $select_dept["dept_name"]; ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>

            <?php

            }
            ?>
            <?php
            $_SESSION['shift'] = 'shift2';
            include("./database/db.php");
            $dept = mysqli_query($con, "SELECT * FROM idc_dept");
            $dept_row = mysqli_num_rows($dept);
            if ($dept_row > 0) {
            ?>
                <table class="content-table" style="margin-right:5%; width : 80vh; float:right;">
                    <thead>
                        <tr style="border-bottom: 1px solid white;">
                            <td colspan="2" style="text-align: center;">SHIFT - 2 Departments</td>
                        </tr>
                        <tr>
                            <th>S No.</th>
                            <th>Department Name</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while ($select_dept = mysqli_fetch_array($dept)) {
                        ?>
                            <tr>
                                <td><?php echo $select_dept["sno"]; ?></td>
                                <td><?php echo $select_dept["dept_name"]; ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            <?php
            }
            ?>
        </div>
    <?php } ?>
    <div style="clear:both;">

    </div>
    <?php if (isset($_REQUEST['course'])) { ?>
        <div>
            <!-- Display courses -->
            <?php
            $_SESSION['shift'] = 'shift1';
            include("./database/db.php");
            $dept = mysqli_query($con, "SELECT * FROM idc_course");
            $dept_row = mysqli_num_rows($dept);
            if ($dept_row > 0) {

            ?>

                <h2 style="text-align: center;">Course Table(idc_course)</h2>
                <table class="content-table" style="margin-left: 7%; width : 180vh;float:left;">
                    <thead>
                        <tr style="border-bottom: 1px solid white;">
                            <td colspan="7" style="text-align: center;">SHIFT - 1 Courses</td>
                        </tr>
                        <tr>
                            <th>S No.</th>
                            <th>Course ID</th>
                            <th>Course</th>
                            <th>Department</th>
                            <th>Art or Science</th>
                            <th>Shift</th>
                            <th>Strength</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 1;
                        while ($select_dept = mysqli_fetch_array($dept)) {
                        ?>
                            <tr>
                                <td><?php echo $i; ?></td>
                                <td><?php echo $select_dept["id"]; ?></td>
                                <td><?php echo $select_dept["course"]; ?></td>
                                <td><?php echo $select_dept["dept_name"]; ?></td>
                                <td><?php echo $select_dept["artorsci"]; ?></td>
                                <td><?php echo $select_dept["shift"]; ?></td>
                                <td><?php echo $select_dept["number"]; ?></td>

                            </tr>
                        <?php
                            $i++;
                        } ?>
                    </tbody>
                </table>

            <?php

            }
            ?>
            <?php
            $_SESSION['shift'] = 'shift2';
            include("./database/db.php");
            $dept = mysqli_query($con, "SELECT * FROM idc_course");
            $dept_row = mysqli_num_rows($dept);
            if ($dept_row > 0) {

            ?>


                <table class="content-table" style="margin-left: 7%; width : 180vh;float:left;">
                    <thead>
                        <tr style="border-bottom: 1px solid white;">
                            <td colspan="7" style="text-align: center;">SHIFT - 2 Courses</td>
                        </tr>
                        <tr>
                            <th>S No.</th>
                            <th>Course ID</th>
                            <th>Course</th>
                            <th>Department</th>
                            <th>Art or Science</th>
                            <th>Shift</th>
                            <th>Strength</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 1;
                        while ($select_dept = mysqli_fetch_array($dept)) {
                        ?>
                            <tr>
                                <td><?php echo $i; ?></td>
                                <td><?php echo $select_dept["id"]; ?></td>
                                <td><?php echo $select_dept["course"]; ?></td>
                                <td><?php echo $select_dept["dept_name"]; ?></td>
                                <td><?php echo $select_dept["artorsci"]; ?></td>
                                <td><?php echo $select_dept["shift"]; ?></td>
                                <td><?php echo $select_dept["number"]; ?></td>

                            </tr>
                        <?php
                            $i++;
                        } ?>
                    </tbody>
                </table>
            <?php
            }
            ?>
        </div>
    <?php } ?>
    <div style="clear:both;"></div>

    <?php if (isset($_REQUEST['student'])) { ?>
        <div>

            <!-- Display students -->
            <?php
            $shift = $_GET['student'];
            $_SESSION['shift'] = 'shift1';
            include("./database/db.php");
            $dept = mysqli_query($con, "SELECT * FROM idc_result");
            $dept_row = mysqli_num_rows($dept);
            if ($shift == 1 && $dept_row > 0) {

            ?>

                <h2 style="text-align: center;">Students Table(idc_result)</h2>
                <a href="ViewData.php?student=2"><button class="button">Shift - 2</button></a>
                <table class="content-table" style="margin-left: 7%; width : 180vh;float:left;">
                    <thead>
                        <tr style="border-bottom: 1px solid white;">
                            <td colspan="7" style="text-align: center;">SHIFT - 1 Students</td>
                        </tr>
                        <tr>
                            <th>S No.</th>
                            <th>D No.</th>
                            <th>Name</th>
                            <th>Mark</th>
                            <th>Department Name </th>
                            <th>UG / PG</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 1;
                        while ($select_dept = mysqli_fetch_array($dept)) {
                        ?>
                            <tr>
                                <td><?php echo $i; ?></td>
                                <td><?php echo $select_dept["dno"]; ?></td>
                                <td><?php echo $select_dept["name"]; ?></td>
                                <td><?php echo $select_dept["attendence"]; ?></td>
                                <td><?php echo $select_dept["dept_name"]; ?></td>
                                <td><?php echo $select_dept["graduate"]; ?></td>


                            </tr>
                        <?php
                            $i++;
                        } ?>
                    </tbody>
                </table>

            <?php

            }
            ?>
            <?php
            $_SESSION['shift'] = 'shift2';
            include("./database/db.php");
            $dept = mysqli_query($con, "SELECT * FROM idc_result");
            $dept_row = mysqli_num_rows($dept);
            if ($shift == 2 && $dept_row > 0) {

            ?>

                <h2 style="text-align: center;">Students Table(idc_result)</h2>
                <a href="ViewData.php?student=1"><button class="button">Shift - 1</button></a>
                <table class="content-table" style="margin-left: 7%; width : 180vh;float:left;">
                    <thead>
                        <tr style="border-bottom: 1px solid white;">
                            <td colspan="7" style="text-align: center;">SHIFT - 2 Students</td>
                        </tr>
                        <tr>
                            <th>S No.</th>
                            <th>D No.</th>
                            <th>Name</th>
                            <th>Mark</th>
                            <th>Department Name </th>
                            <th>UG / PG</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 1;
                        while ($select_dept = mysqli_fetch_array($dept)) {
                        ?>
                            <tr>
                                <td><?php echo $i; ?></td>
                                <td><?php echo $select_dept["dno"]; ?></td>
                                <td><?php echo $select_dept["name"]; ?></td>
                                <td><?php echo $select_dept["attendence"]; ?></td>
                                <td><?php echo $select_dept["dept_name"]; ?></td>
                                <td><?php echo $select_dept["graduate"]; ?></td>


                            </tr>
                        <?php
                            $i++;
                        } ?>
                    </tbody>
                </table>
            <?php
            }
            ?>
        </div>
    <?php } ?>

</body>

</html>