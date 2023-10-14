<?php
session_start();

$_SESSION['shift'] = 'shift1';
include("./database/db.php");
include("./database/alert.php");
if (!isset($_COOKIE['username']) && !isset($_COOKIE['password'])) {
    header("location: Loader.php");
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

        form {
            background-color: white;
            margin-top: 50px;
            border: 5px solid #f1f1f1;
            width: 80vh;
            border-radius: 15px;
            box-shadow: 5px 5px 5px 5px #888888;
            height: 80vh;
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

        button {
            background-color: brown;
            color: white;
            padding: 14px 0;
            margin: 10px 0;
            border: none;
            cursor: grab;
            width: 48%;
            border-radius: 10px;
        }

        h1 {
            text-align: center;
            font-size: 18;
        }

        button:hover {
            opacity: 0.8;
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
    </style>
</head>

<body>
    <form action="./admin/logic/login.php" method="POST">
        <h1>Admin Login</h1>
        <div class="icon">
            <img src="./assets//logo.png" alt="sjc logo" height="175vh" width="175vh" />
        </div>
        <div class="formcontainer" style="margin-top: -5px;">
            <div class="container">
                <label for="username"><strong>Username</strong></label>
                <input type="text" placeholder="Enter Username" name="username" required>
                <label for="password"><strong>Password</strong></label>
                <input type="password" placeholder="Enter Password" name="password" required>
            </div>
            <button type="submit" name="login_submit"><strong>LOGIN</strong></button>
    </form>
</body>

</html>