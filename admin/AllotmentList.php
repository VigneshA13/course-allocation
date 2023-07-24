<?php
include("../database/db.php");
if (!isset($_SESSION['id'])) {
    header("location: ../index.php");
}
?>
<!DOCTYPE html>
<!-- Coding by CodingLab | www.codinglabweb.com -->
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SJC Admin</title>
    <link rel="icon" href="../assets/logo.png">

    <!----======== CSS ======== -->
    <link rel="stylesheet" href="../assets/style.css">
    <link rel="stylesheet" href="../assets/loader.css">

    <!----===== Boxicons CSS ===== -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>

    <!--<title>Dashboard Sidebar Menu</title>-->
</head>

<body>

    <aside class="sidebar close">
        <header>
            <div class="image-text">
                <span class="image">
                    <img src="../assets/logo.png" alt="logo">
                </span>

                <div class="text logo-text">
                    <span class="name">SJC Admin</span>
                    <span class="profession">Course Allotment</span>
                </div>
            </div>

            <i class='bx bx-chevron-right toggle'></i>
        </header>

        <div class="menu-bar">
            <div class="menu">
                <ul class="menu-links">
                    <li class="nav-link">
                        <a href="index.php">
                            <iconify-icon icon="line-md:home" class="icon"></iconify-icon>
                            <span class="text nav-text">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-link" id="active">
                        <a href="AllotmentList.php">
                            <iconify-icon icon="line-md:list-3-filled" class="icon" id="activeColor"></iconify-icon>
                            <span class="text nav-text" id="activeColor">Allotment List</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="UnallotedList.php">
                            <iconify-icon icon="line-md:list" class="icon"></iconify-icon>
                            <span class="text nav-text">Unallotted List</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="Details.php">
                            <iconify-icon icon="icon-park-outline:doc-detail" class="icon"></iconify-icon>
                            <span class="text nav-text">Details</span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="bottom-content">
                <li class="">
                    <a href="./logic/login.php?logout=logout">
                        <i class='bx bx-log-out icon'></i>
                        <span class="text nav-text">Logout</span>
                    </a>
                </li>
            </div>
        </div>
    </aside>

    <section class="home">
        <nav class="nav">
            <span class="image">
                <img src="../assets/logo.png" alt="logo">
            </span>
        </nav>

        <?php
        $course = mysqli_query($con, "SELECT * FROM idc_course");
        $row = mysqli_num_rows($course);
        $stud = mysqli_query($con, "SELECT * FROM idc_result WHERE allocate != 0");
        $student = mysqli_num_rows($stud);
        if ($row > 0 && $student > 0) {
        ?>
            <div id="data">
                <div class="headtext" id="data">
                    <h1>Course Alloted List</h1>
                </div>
                <?php
                $code = "";
                while ($result = mysqli_fetch_array($course)) {
                    $courseID = $result['id'];
                    $students = mysqli_query($con, "SELECT * FROM idc_result WHERE allocate = $courseID ORDER BY dept_name");
                    $strength = mysqli_num_rows($students);
                ?>
                    <div class="card">
                        <div class="header"> <?php echo $result['course']; ?> <span class="header-span">Strength : <?php echo $strength ?></span></div>
                        <?php
                        while ($studentsResult = mysqli_fetch_array($students)) {
                            $temp = str_split($studentsResult['dno'], 5);
                            if ($code != $temp[0]) {
                                $code = $temp[0];
                        ?>
                                <div class="body">
                                    <div class="left">
                                        <div class="skill-name">
                                            <?php echo $code ?>
                                        </div>
                                    </div>
                                    <div class="right">
                                        <div class="skill-dno"> <?php numbers($con,  $courseID, $code) ?>
                                        </div>

                                    </div>
                                </div>
                        <?php }
                        } ?>
                    </div>
            </div>
        <?php }
            } else { ?>
        <div class="nodata" id="data">
            <h1>No Courses Are Allotted To Display.</h1>
        </div>
    <?php } ?>
    <div class="loader" id="load">Loading...</div>
    </section>


</body>

</html>
<script>
    const body = document.querySelector('body'),
        sidebar = body.querySelector('aside'),
        toggle = body.querySelector(".toggle"),
        modeText = body.querySelector(".mode-text");


    toggle.addEventListener("click", () => {
        sidebar.classList.toggle("close");
    });

    // setTimeout(hide, 10000);
    document.getElementById("load").style.display = "none";

    function hide() {
        document.getElementById("load").style.display = "none";
        document.getElementById("data").style.display = "block";
    }
</script>

<?php
function numbers($con, $courseID, $code)
{
    $sel = mysqli_query($con, "SELECT * FROM idc_result WHERE allocate = $courseID ORDER BY dno");
    $c = 0;
    while ($result = mysqli_fetch_array($sel)) {
        $deptName = $result['dept_name'];
        $sel2 = mysqli_query($con, "SELECT * FROM idc_result WHERE allocate = $courseID AND dept_name = '$deptName' ORDER BY dno");
        $count = mysqli_num_rows($sel2);
        $temp = str_split($result['dno'], 5);

        if ($temp[0] == $code) {
            $c++;
            echo $temp[1];
            if ($count != $c) {
                echo  "<span class='skill-span'> | </span> ";
            }
        }
    }
}
?>