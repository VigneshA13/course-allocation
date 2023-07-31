<!DOCTYPE html>
<html>
<title>Simple Sign up from</title>

<head>


    <style>
        html,
        body {
            display: flex;
            justify-content: center;
            font-family: Roboto, Arial, sans-serif;
            font-size: 15px;
            background-color: #ececec78;
        }

        form {
            margin: 10vh;
            width: 70vh;
            border: 5px solid #f1f1f1;
            box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
            border-radius: 5px;
            margin-top: 20px;
        }

        input[type=text],
        input[type=password] {
            width: 100%;
            padding: 16px 8px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }

        button {
            background-color: #4286f4;
            color: white;
            padding: 14px 0;
            margin: 10px 0;
            border: none;
            cursor: grab;
            width: 48%;
        }

        h1 {
            text-align: center;
            fone-size: 18;
            margin-top: 6vh;
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
    <form action="./admin/logic/login.php" method="post">
        <h1>SIGN UP</h1>

        <div class="formcontainer">
            <div class="container">
                <div style="margin-top: 2vh;">
                    <label for="username"><strong>Database Username</strong></label>
                    <input type="password" placeholder="Enter Database Name" name="username" required>
                </div>
                <div style="margin-top: 2vh;">
                    <label for="password"><strong>Database Password</strong></label>
                    <input type="password" placeholder="Enter Database Name" name="password" required>
                </div>
                <div style="margin-top: 2vh;">
                    <label for="shift_1"><strong>Shift-1 Database Name</strong></label>
                    <input type="text" placeholder="Enter Database Name" name="shift_1" required>
                </div>
                <div style="margin-top: 2vh;">
                    <label for="shift_2"><strong>Shift-2 Database Name</strong></label>
                    <input type="text" placeholder="Enter Database Name" name="shift_2" required>
                </div>
            </div>
            <button type="submit" name="Check"><strong>UPDATE</strong></button>
    </form>
</body>

</html>