<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/login.css">
    <title>Boostrap Login | Ludiflex</title>
</head>

<body>

    <!----------------------- Main Container -------------------------->

    <div class="container d-flex justify-content-center align-items-center min-vh-100">

        <!----------------------- Login Container -------------------------->

        <div class="row border rounded-5 p-3 bg-white shadow box-area" style="width: 80vh;height: 50vh;">

            <div class="row align-items-center" style="margin-left: 1vh;">
                <div class="header-text mb-4" style="text-align: center; margin-top: 2vh;">
                    <h2 style="font-weight: bold;">Admin Login</h2>
                    <p></p>
                </div>
                <form action="./admin/logic/login.php" method="POST">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control form-control-lg bg-light fs-6" placeholder="Username" name="username" required>
                    </div>
                    <div class="input-group mb-1">
                        <input type="password" class="form-control form-control-lg bg-light fs-6" placeholder="Password" name="password" required>
                    </div>
                    <div class="input-group mb-5 d-flex justify-content-between">

                    </div>
                    <div class="input-group mb-5">
                        <button class="btn btn-lg btn-primary w-100 fs-6" id="button" type="submit" name="login_submit">
                            <span style="font-weight:bold;font-size:20px;">Login</span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>