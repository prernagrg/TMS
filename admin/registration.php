<?php require("./config/config.php");

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Register- to create an account</title>
    <link rel="stylesheet" href="assets/css/style.css">

</head>

<body>
    <section>
        <div class="container">
            <div class="row m-5 px-5">
                <h3 class="text-center fw-bold py-3">Registration</h3>
                <div class="col-md-6 border py-4 w-100 px-3">
                    <?php
                    if (isset($_GET['msg'])) {
                        $msg = $_GET['msg'];
                        if ($msg == "register") {
                            echo "<div class='alert alert-success' role='alert'>  Account added successfully </div";
                            header("Refresh:2; url=index.php");
                        }
                        if ($msg == "error") {
                            echo "<div class='alert alert-warning' role='alert'>Account is not added </div";
                            header("Refresh:2; url=registration.php");
                        }
                    }
                    ?>
                    <form action="auth/register.php" method="POST" enctype="multipart/form-data">
                        <fieldset class="fieldset">

                            <div class="my-2">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" id="name" name="name">
                            </div>
                            <div class="my-2">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email">
                            </div>
                            <div class="my-2">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" name="password">
                            </div>
                            <div class="my-1">
                                <button type="submit" name="submit" class="btn btn-primary">Register</button>
                            </div>
                            <div class="my-3">
                                <a href="index.php" class="text-decoration-none">If you already have an account login to continue.</a>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>

</html>