<?php require("./config/config.php")?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css"
     rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" 
     crossorigin="anonymous">
    <title>Login</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
        <section>
            <div class="container">
                <div class="wrapper m-5 px-5">
                    <div class="login border py-4 px-3">
                    <?php


                    if (isset($_GET['msg'])) {
                $msg = $_GET["msg"];
                if ($msg = "success") {
                 echo "<div class='alert alert-primary' role='alert'>
                        Account logged in sucessfully</div>";
                         header("refresh:0; url=dashboard.php");
                         }
                 if ($msg == "emptyfield") {
                echo "<div class='alert alert-danger' role='alert'>Please fill  all fields..</div>";
                    header("refresh:2; url=index.php");
                     }
             if ($msg == "login_failed") {
                echo "<div class='alert alert-danger' role='alert'>Username or email not found. </div>";
                header("refresh:2; url=index.php");
                 }
                }

                    ?>
                        <form action="auth/login.php" method="POST" enctype="multipart/form-data">
                            <fieldset class="fieldset">
                                <h3 class="text-center fw-bold">Login</h3>
                                <div class="my-2">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email">
                                </div>
                                <div class="my-2">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" name="password">
                                </div>
                                <div class="my-2">
                                    <button class="btn btn-primary btn-sm" type="submit" name="submmit">Login</button>
                                </div>
                                <div class="my-3">
                                    <a href="registration.php" class="text-decoration-none">If you haven't registered yet click here.</a>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
     crossorigin="anonymous"></script>
</body>

</html>