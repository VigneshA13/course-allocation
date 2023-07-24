<?php
include("../database/db.php");
if (!isset($_SESSION['id'])) {
    header("location: ../index.php");
}
$idc_result = mysqli_query($con, "SELECT * FROM idc_result");
$student = mysqli_num_rows($idc_result);
$idc_course = mysqli_query($con, "SELECT * FROM idc_course");
$course = mysqli_num_rows($idc_course);
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
                    <li class="nav-link" id="active">
                        <a href="Index.php">
                            <iconify-icon icon="line-md:home" class="icon" id="activeColor"></iconify-icon>
                            <span class="text nav-text" id="activeColor">Dashboard</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="AllotmentList.php">
                            <iconify-icon icon="line-md:list-3-filled" class="icon"></iconify-icon>
                            <span class="text nav-text">Allotment List</span>
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
        <div class="ag-courses_box">
            <div class="ag-courses_item" style="background: red;">
                <?php
                $test = mysqli_query($con, "SELECT * FROM idc_result WHERE allocate = 0");
                $count = mysqli_num_rows($test);
                if ($count == $student) {
                ?>
                    <a href="./logic/CourseAllotment.php?start=start" class="ag-courses-item_link">
                        <div class="ag-courses-item_bg"></div>
                        <div class="ag-courses-item_title">
                            Start Course Allocations
                        </div>
                    </a>
                <?php } elseif ($count < $student && $count != 0) { ?>
                    <a href="./logic/Unallotted.php?allotment_start=allotment_start" class="ag-courses-item_link">
                        <div class="ag-courses-item_bg"></div>
                        <div class="ag-courses-item_title">
                            Start Allocations for Unalloted Students
                        </div>
                    </a>
                <?php } else { ?>
                    <a href="./PDF.php" class="ag-courses-item_link" target="_blank">
                        <div class="ag-courses-item_bg"></div>
                        <div class="ag-courses-item_title">
                            Download Course Alloted PDF
                        </div>
                    </a>
                <?php
                } ?>
            </div>

            <div class="ag-courses_item" style="background: red;">
                <a href="#" class="ag-courses-item_link">
                    <div class="ag-courses-item_bg"></div>
                    <div class="ag-courses-item_title">
                        No. Of Students<br> <?php echo $student ?>
                    </div>
                </a>
            </div>
            <div class="ag-courses_item" style="background: red;">
                <a href="#" class="ag-courses-item_link">
                    <div class="ag-courses-item_bg">
                    </div>
                    <div class="ag-courses-item_title">
                        No. Of Course<br> <?php echo $course ?>
                    </div>
                </a>
            </div>

        </div>
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
    })
</script>