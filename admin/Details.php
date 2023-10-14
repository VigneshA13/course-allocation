<?php
session_start();
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

            <i class='bx bx-chevron-right toggle' style="font-weight: bold; font-size: 24px;"> </i>
        </header>

        <div class="menu-bar">
            <div class="menu">

                <ul class="menu-links">
                    <li class="nav-link">
                        <a href="Index.php">
                            <svg class="icon" id="icons" width="24" height="24" viewBox="0 0 45 45">
                                <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                    <path stroke-dasharray="21" stroke-dashoffset="21" d="M5 21H19">
                                        <animate fill="freeze" attributeName="stroke-dashoffset" dur="0.2s" values="21;0" />
                                    </path>
                                    <path stroke-dasharray="15" stroke-dashoffset="15" d="M5 21V8M19 21V8">
                                        <animate fill="freeze" attributeName="stroke-dashoffset" begin="0.2s" dur="0.2s" values="15;0" />
                                    </path>
                                    <path stroke-dasharray="24" stroke-dashoffset="24" d="M9 21V13H15V21">
                                        <animate fill="freeze" attributeName="stroke-dashoffset" begin="0.4s" dur="0.4s" values="24;0" />
                                    </path>
                                    <path stroke-dasharray="26" stroke-dashoffset="26" d="M2 10L12 2L22 10">
                                        <animate fill="freeze" attributeName="stroke-dashoffset" begin="0.5s" dur="0.4s" values="26;0" />
                                    </path>
                                </g>
                            </svg>
                            <span class="text nav-text">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="AllotmentList.php">
                            <svg width="24" height="24" viewBox="0 0 42 42" id="icons" class="icon">
                                <g fill="currentColor" fill-opacity="0" stroke="currentColor" stroke-linecap="round">
                                    <g stroke-dasharray="10" stroke-dashoffset="10">
                                        <circle cx="5" cy="5" r="1.5">
                                            <animate fill="freeze" attributeName="stroke-dashoffset" dur="0.2s" values="10;0" />
                                            <animate fill="freeze" attributeName="fill-opacity" begin="2.0s" dur="0.5s" values="0;1" />
                                        </circle>
                                        <circle cx="5" cy="12" r="1.5">
                                            <animate fill="freeze" attributeName="stroke-dashoffset" begin="0.7s" dur="0.2s" values="10;0" />
                                            <animate fill="freeze" attributeName="fill-opacity" begin="2.2s" dur="0.5s" values="0;1" />
                                        </circle>
                                        <circle cx="5" cy="19" r="1.5">
                                            <animate fill="freeze" attributeName="stroke-dashoffset" begin="1.4s" dur="0.2s" values="10;0" />
                                            <animate fill="freeze" attributeName="fill-opacity" begin="2.4s" dur="0.5s" values="0;1" />
                                        </circle>
                                    </g>
                                    <g stroke-dasharray="28" stroke-dashoffset="28">
                                        <rect width="11" height="3" x="9.5" y="3.5" rx="1.5">
                                            <animate fill="freeze" attributeName="stroke-dashoffset" begin="0.1s" dur="0.5s" values="28;0" />
                                            <animate fill="freeze" attributeName="fill-opacity" begin="2.0s" dur="0.5s" values="0;1" />
                                        </rect>
                                        <rect width="11" height="3" x="9.5" y="10.5" rx="1.5">
                                            <animate fill="freeze" attributeName="stroke-dashoffset" begin="0.8s" dur="0.5s" values="28;0" />
                                            <animate fill="freeze" attributeName="fill-opacity" begin="2.2s" dur="0.5s" values="0;1" />
                                        </rect>
                                        <rect width="11" height="3" x="9.5" y="17.5" rx="1.5">
                                            <animate fill="freeze" attributeName="stroke-dashoffset" begin="1.5s" dur="0.5s" values="28;0" />
                                            <animate fill="freeze" attributeName="fill-opacity" begin="2.4s" dur="0.5s" values="0;1" />
                                        </rect>
                                    </g>
                                </g>
                            </svg>
                            <span class="text nav-text">Allotment List</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="UnallotedList.php">
                            <svg viewBox="0 0 38 38" class="icon" id="icons">
                                <g fill="none" stroke="currentColor" stroke-dasharray="14" stroke-dashoffset="14" stroke-linecap="round" stroke-width="2">
                                    <path d="M8 5H20">
                                        <animate fill="freeze" attributeName="stroke-dashoffset" begin="0.1s" dur="0.2s" values="14;0" />
                                    </path>
                                    <path d="M8 10H20">
                                        <animate fill="freeze" attributeName="stroke-dashoffset" begin="0.4s" dur="0.2s" values="14;0" />
                                    </path>
                                    <path d="M8 15H20">
                                        <animate fill="freeze" attributeName="stroke-dashoffset" begin="0.7s" dur="0.2s" values="14;0" />
                                    </path>
                                    <path d="M8 20H20">
                                        <animate fill="freeze" attributeName="stroke-dashoffset" begin="1s" dur="0.2s" values="14;0" />
                                    </path>
                                </g>
                                <g fill="currentColor" fill-opacity="0">
                                    <circle cx="4" cy="5" r="1">
                                        <animate fill="freeze" attributeName="fill-opacity" dur="0.2s" values="0;1" />
                                    </circle>
                                    <circle cx="4" cy="10" r="1">
                                        <animate fill="freeze" attributeName="fill-opacity" begin="0.3s" dur="0.2s" values="0;1" />
                                    </circle>
                                    <circle cx="4" cy="15" r="1">
                                        <animate fill="freeze" attributeName="fill-opacity" begin="0.6s" dur="0.2s" values="0;1" />
                                    </circle>
                                    <circle cx="4" cy="20" r="1">
                                        <animate fill="freeze" attributeName="fill-opacity" begin="0.9s" dur="0.2s" values="0;1" />
                                    </circle>
                                </g>
                            </svg>
                            <span class="text nav-text">Unallotted List</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="Details.php" id="active">
                            <svg style="color:white" width="48" height="48" viewBox="0 0 92 92" class="icon" id="icons">
                                <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="4">
                                    <path d="M39 4H11a2 2 0 0 0-2 2v36a2 2 0 0 0 2 2h28a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2ZM17 30h14m-14 6h7" />
                                    <path d="M17 12h14v10H17z" />
                                </g>
                            </svg>
                            <span class="text nav-text" id="activeColor">Details</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="Setting.php">
                            <svg viewBox="0 0 37 37" class="icon" id="icons">
                                <path fill="currentColor" d="M19.9 12.66a1 1 0 0 1 0-1.32l1.28-1.44a1 1 0 0 0 .12-1.17l-2-3.46a1 1 0 0 0-1.07-.48l-1.88.38a1 1 0 0 1-1.15-.66l-.61-1.83a1 1 0 0 0-.95-.68h-4a1 1 0 0 0-1 .68l-.56 1.83a1 1 0 0 1-1.15.66L5 4.79a1 1 0 0 0-1 .48L2 8.73a1 1 0 0 0 .1 1.17l1.27 1.44a1 1 0 0 1 0 1.32L2.1 14.1a1 1 0 0 0-.1 1.17l2 3.46a1 1 0 0 0 1.07.48l1.88-.38a1 1 0 0 1 1.15.66l.61 1.83a1 1 0 0 0 1 .68h4a1 1 0 0 0 .95-.68l.61-1.83a1 1 0 0 1 1.15-.66l1.88.38a1 1 0 0 0 1.07-.48l2-3.46a1 1 0 0 0-.12-1.17ZM18.41 14l.8.9l-1.28 2.22l-1.18-.24a3 3 0 0 0-3.45 2L12.92 20h-2.56L10 18.86a3 3 0 0 0-3.45-2l-1.18.24l-1.3-2.21l.8-.9a3 3 0 0 0 0-4l-.8-.9l1.28-2.2l1.18.24a3 3 0 0 0 3.45-2L10.36 4h2.56l.38 1.14a3 3 0 0 0 3.45 2l1.18-.24l1.28 2.22l-.8.9a3 3 0 0 0 0 3.98Zm-6.77-6a4 4 0 1 0 4 4a4 4 0 0 0-4-4Zm0 6a2 2 0 1 1 2-2a2 2 0 0 1-2 2Z" />
                            </svg>

                            <span class="text nav-text">Settings</span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="bottom-content">
                <li>
                    <a href="./logic/login.php?shift_change=shift_change">
                        <?php echo $_SESSION['shift'] == "shift1" ?
                            '<svg width="16" height="16" viewBox="0 0 26 26" class="icon" id="icons" >
                            <path fill="currentColor" d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0ZM9.283 4.002H7.971L6.072 5.385v1.271l1.834-1.318h.065V12h1.312V4.002Z" />
                        </svg>' :
                            '<svg  width="24" height="24" viewBox="0 0 33 33" class="icon" id="icons" style="margin-left: 7px;" >
                            <path fill="currentColor" d="M12 22q-2.075 0-3.9-.788t-3.175-2.137q-1.35-1.35-2.137-3.175T2 12q0-2.075.788-3.9t2.137-3.175q1.35-1.35 3.175-2.137T12 2q2.075 0 3.9.788t3.175 2.137q1.35 1.35 2.138 3.175T22 12q0 2.075-.788 3.9t-2.137 3.175q-1.35 1.35-3.175 2.138T12 22Zm-3-5h6v-2h-4v-2h2q.825 0 1.413-.588T15 11V9q0-.825-.588-1.413T13 7H9v2h4v2h-2q-.825 0-1.413.588T9 13v4Z"/>
                            </svg>' ?>
                        <span class="text nav-text"><?php echo $_SESSION['shift'] == "shift1" ? "SHIFT 1" : "SHIFT 2" ?></span>
                    </a>
                </li>
                <li class="">
                    <a href="./logic/login.php?logout=logout">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" id="icons" viewBox="0 0 42 42">
                            <path fill="currentColor" d="M5 21q-.825 0-1.413-.588T3 19V5q0-.825.588-1.413T5 3h7v2H5v14h7v2H5Zm11-4l-1.375-1.45l2.55-2.55H9v-2h8.175l-2.55-2.55L16 7l5 5l-5 5Z" />
                        </svg>
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
            <div class="ag-courses_item">
                <a href="./details/Department.php" class="ag-courses-item_link" target="_blank">
                    <div class="ag-courses-item_bg"></div>
                    <div class="ag-courses-item_title" style="font-size: 20px;">
                        Student Department Check
                    </div>
                </a>
            </div>

            <div class="ag-courses_item">
                <a href="./details/OptionAll.php" class="ag-courses-item_link" target="_blank">
                    <div class="ag-courses-item_bg"></div>
                    <div class="ag-courses-item_title" style="font-size: 20px;">
                        Option Wise List
                    </div>
                </a>
            </div>
            <div class="ag-courses_item">
                <a href="./details/OptionSelect.php" class="ag-courses-item_link" target="_blank">
                    <div class="ag-courses-item_bg">
                    </div>
                    <div class="ag-courses-item_title" style="font-size: 20px;">
                        Option Wise Selection List
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