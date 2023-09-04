<?php
session_start();
if (isset($_GET['department'])) {
    header("Content-Type: text/plain");
    header('Content-Disposition: attachement; filename="department_formate.csv"');
    echo "Department_name";
}

if (isset($_GET['course'])) {
    header("Content-Type: text/plain");
    header('Content-Disposition: attachement; filename="course_formate.csv"');
    echo "Course_title, Department_name, Staff_name, art or science, Strength";
}

if (isset($_GET['student'])) {
    header("Content-Type: text/plain");
    header('Content-Disposition: attachement; filename="Student_formate.csv"');
    echo "Dno, Name, Mark, Department_name";
}

if (isset($_GET['stud_data'])) {
    header("Content-Type: text/plain");
    header('Content-Disposition: attachement; filename="allot_Student_formate.csv"');
    echo "Dno, Option1, Option2, Option3, date, time, previous, status, astatus";
}
