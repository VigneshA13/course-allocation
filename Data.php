<?php
session_start();

$_SESSION['shift'] = 'shift1';
include("./database/db.php");
include("./database/alert.php");

$course_row = course($con);
$dept_row = department($con);
$idc_result = student($con);

if ($course_row > 0 && $dept_row > 0 && $idc_result > 0) {
    header("location: index.php");
}
?>
<!DOCTYPE html>
<html>
<title>Admin Login</title>
<link rel="icon" href="./assets/logo.png">

<head>
    <style>
        html,
        body {
            display: flex;
            justify-content: center;
            font-family: Roboto, Arial, sans-serif;
            font-size: 15px;
            background-color: #e3e3e3;

        }

        div {
            background-color: white;
            margin-top: 100px;
            border: 5px solid #f1f1f1;
            width: 200vh;
            border-radius: 15px;
            box-shadow: 5px 5px 5px 5px #888888;
            height: 65vh;
        }

        input[type=text],
        input[type=password] {
            width: 100%;
            padding: 16px 8px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
            border-radius: 10px;
        }

        .icon {

            display: flex;
            justify-content: center;
            color: #4286f4;
        }


        h1 {
            text-align: center;
            font-size: 18;
            margin-top: 50px;
        }



        .formcontainer {
            text-align: center;
            margin: 24px 50px 12px;
        }

        .container {
            padding: 16px 0;
            text-align: left;
        }

        span.psw {
            float: right;
            padding-top: 0;
            padding-right: 15px;
        }

        /* Change styles for span on extra small screens */
        @media screen and (max-width: 300px) {
            span.psw {
                display: block;
                float: none;
            }
        }

        .content-table {
            border-collapse: collapse;
            margin: 25px 0;
            font-size: 20px;
            min-width: 95%;
            border-radius: 5px 5px 0 0;
            overflow: hidden;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
            margin: 2.5%;
            margin-top: 50px;
        }

        .content-table thead tr {
            background-color: #833125;
            color: #ffffff;
            text-align: left;
            font-weight: bold;
        }

        .content-table th,
        .content-table td {
            padding: 10px 13px;

        }

        .content-table tbody tr {
            border-bottom: 1px solid #dddddd;
        }

        .content-table tbody tr:nth-of-type(even) {
            background-color: #f3f3f3;
        }

        .content-table tbody tr:last-of-type {
            border-bottom: 2px solid #833125;
            ;
        }

        .button {
            display: inline-block;
            padding: 8px 16px;
            border: 1px solid #4f4f4f;
            border-radius: 10px;
            transition: all 0.2s ease-in;
            position: relative;
            overflow: hidden;
            font-size: 19px;
            color: black;
            z-index: 1;
        }

        .file {
            display: inline-block;
            padding: 10px 20px;
            transition: all 0.2s ease-in;
            position: relative;
            overflow: hidden;
            font-size: 19px;
            color: black;
            z-index: 1;

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

        input[type="file"] {
            display: inline-block;

            transition: all 0.2s ease-in;
            position: relative;
            overflow: hidden;
            font-size: 19px;
            color: black;
            z-index: 1;

        }
    </style>
</head>

<body>
    <div>
        <h1>Add Shift 1 and Shift 2 Data </h1>
        <table class="content-table">
            <thead>
                <tr>

                    <th>Formate</th>
                    <th>Table Name</th>
                    <th>Shift 1</th>
                    <th>Shift 2</th>
                    <th> Upload</th>

                </tr>
            </thead>
            <tbody>
                <tr>
                    <?php echo department($con) <= 0 ?
                        '<td><a href="./admin/Formate/Formate.php?department=department"> <button class="button" style="width: 14vh;padding: 4px 12px;">Formate</button> </a></td>
                        <form action="Test.php" enctype="multipart/form-data" method="post">
                            <td style="font-weight: bold;">Department</td>
                            <td><input id="file" name="file" type="file" accept=".csv" ></td>
                            <td><input id="file" name="file2" type="file" accept=".csv" ></td>
                            <td><button type="submit" name="department" class="button" style="width: 13vh;margin-left:-2vh;">ADD</button></td>
                        </form>'
                        :
                        '<td></td>
                        <td style="font-weight: bold;">Department</td>
                        <td>Success</td>
                        <td>Success</td>
                        <td><a href="ViewData.php?department=department" target=”_blank”> <button class="button" style="width: 15vh;margin-left:-2vh">View</button> </a></td>';
                    ?>
                </tr>

                <tr>
                    <?php echo course($con) <= 0 ?
                        '<td><a href="./admin/Formate/Formate.php?course=course" > <button class="button" style="width: 14vh;padding: 4px 12px;">Formate</button> </a></td>
                        <form action="Test.php" enctype="multipart/form-data" method="post">
                            <td style="font-weight: bold;">Course</td>
                            <td><input id="file" name="file" type="file" accept=".csv" class = "file" style="margin-left: -4%;"></td>
                            <td><input id="file" name="file2" type="file" accept=".csv" class = "file" style="margin-left: -4%;"></td>
                            <td><button type="submit" name="course" class="button" style="width: 13vh;margin-left:-2vh;">ADD</button></td>
                        </form>'
                        :
                        '<td></td>
                        <td style="font-weight: bold;">Course</td>
                        <td>Success</td>
                        <td>Success</td>
                        <td><a href="ViewData.php?course=course" target=”_blank”> <button class="button" style="width: 15vh;margin-left:-2vh">View</button> </a></td>';
                    ?>
                </tr>
                <tr>
                    <?php echo student($con) <= 0 ?
                        '<td><a href="./admin/Formate/Formate.php?student=student" > <button class="button" style="width: 14vh;padding: 4px 12px;">Formate</button> </a></td>
                        <form action="Test.php" enctype="multipart/form-data" method="post">
                            <td style="font-weight: bold;">Student</td>
                            <td><input id="file" name="file" type="file" accept=".csv"></td>
                            <td><input id="file" name="file2" type="file" accept=".csv"></td>
                            <td><button type="submit" name="student" class="button" style="width: 13vh;margin-left:-2vh;">ADD</button></td>
                        </form>'
                        :
                        '<td></td>
                        <td style="font-weight: bold;">Student</td>
                        <td>Success</td>
                        <td>Success</td>
                        <td><a href="ViewData.php?student=1" target=”_blank”> <button class="button" style="width: 15vh;margin-left:-2vh15vh;margin-left:-2vh">View</button> </a></td>';
                    ?>
                </tr>
            </tbody>
        </table>
    </div>
</body>

</html>

<?php
function course($con)
{
    $course = mysqli_query($con, "SELECT * FROM idc_course");
    return mysqli_num_rows($course);
}
function department($con)
{
    $dept = mysqli_query($con, "SELECT * FROM idc_dept");
    return mysqli_num_rows($dept);
}
function student($con)
{
    $result = mysqli_query($con, "SELECT * FROM idc_result");
    return mysqli_num_rows($result);
}
?>