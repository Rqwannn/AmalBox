<?php
require_once "app.php";

?>

<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= BASE_URL; ?>/css/login.css" />


    <title>Login | Ridwan Amal</title>
</head>

<body>
    <div class="content">
        <div class="container">
            <div class="row justify-content-center">

                <div class="col-md-6 contents">
                    <div class="row justify-content-center">
                        <div class="col-md-12">
                            <div class="form-block">
                                <div class="mb-4">
                                    <h3>Sign In to <strong>RidwanAmal</strong></h3>
                                    <p class="mb-4">Lorem ipsum dolor sit amet elit. Sapiente sit aut eos consectetur adipisicing.</p>
                                </div>
                                <form action="#" method="post">
                                    <div class="form-group first mb-3">
                                        <label for="username">Username / Email</label>
                                        <input type="text" class="form-control" id="username">
                                    </div>
                                    <div class="form-group last mb-4 mb-3">
                                        <label for="password">Password</label>
                                        <input type="password" class="form-control" id="password">
                                    </div>
                                    <input type="submit" value="Log In" class="btn btn-pill text-white btn-block btn-primary">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="<?= BASE_URL; ?>/js/jquery.min.js"></script>
    <script src="<?= BASE_URL; ?>/js/popper.min.js"></script>
    <script src="<?= BASE_URL; ?>/js/bootstrap.min.js"></script>
</body>

</html>