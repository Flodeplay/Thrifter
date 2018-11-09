<!DOCTYPE html>
<html lang="de">
<head>
	<?php
    error_reporting(0);
    session_start();
    session_destroy();
    $_SESSION = array();
	?>
<?php echo file_get_contents('html/head.html'); ?>
<title>Thrifter.</title>

<!-- Meta Tags-->
<meta charset="UTF-8">
<meta name = "viewport" content = "width = device-width, initial-scale=1, user-scalable=yes">

<!-- extern stylesheets-->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css"
      integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">
<link rel="stylesheet" href="css/bootstrap.min.css">
<!-- custom style-->
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/nav.css">
<link rel="stylesheet" href="css/footer.css">
<!-- scripts-->
<script src="JS/jquery-3.3.1.min.js"></script>
<script src="JS/popper.min.js"></script>
<script src="JS/bootstrap.min.js"></script>
<script src="JS/base.js"></script>
<!-- Favicons -->
<link rel="apple-touch-icon" sizes="180x180" href="assets/favicons/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="assets/favicons/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="assets/favicons/favicon-16x16.png">
<link rel="manifest" href="assets/favicons/site.webmanifest">
<link rel="mask-icon" href="assets/favicons/safari-pinned-tab.svg" color="#ff6a79">
<link rel="shortcut icon" href="assets/favicons/favicon.ico">
<meta name="msapplication-TileColor" content="#da532c">
<meta name="msapplication-config" content="assets/favicons/browserconfig.xml">
<meta name="theme-color" content="#ffffff">

</head>
<body>
<?php echo file_get_contents('html/navbarTop.html'); ?>
<body>
<main>
    <section class="position-relative">
        <div style="background-image: url('assets/_DSC1438.jpg'); background-size: cover; background-position: center; height: calc(100vh - 60px)"></div>
        <div style="position: absolute; top: 50%; transform: translateY(-50%)" class="text-white display-4 text-center">
            Früher Deins, Heute Meins
            <div>
                <button type="button" class="btn btn-outline-light btn-lg" data-toggle="modal" data-target="#login-modal">
                    Anmelden!
                </button>
            </div>
        </div>
        <div class="scrolldown text-white text-center"><i class="fas fa-chevron-down fa-2x"></i></div>
    </section>
    <section class="full-height-section d-flex align-items-center p-5">
        <blockquote class="blockquote">
            <p class="mb-0">Someone that religiously shops at Thrift Stores looking for bargains and often scores
                amazing deals. Often dedicated to recycling and reuse of products to keep our planet "greener".
            </p>
            <footer class="blockquote-footer">Urban Dictionary</footer>
        </blockquote>
        <div class="scrolldown text-center"><i class="fas fa-chevron-down fa-2x"></i></div>
    </section>
	<section></section>
</main>
<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="login-modal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header bg-success">
                <h5 class="modal-title text-center" id="Login-title"><i class="fas fa-lock mr-3"></i>Login</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i class="fas fa-times"></i></span>
                </button>
            </div>
            <div class="modal-body">
                <form action="login.php" method="post" class="w-100">
                    <div class="input-group mb-3">
                        <input type="text" name="username" class="form-control" placeholder="Username" aria-label="Username">
                    </div>
                    <div class="input-group mb-3">
                        <input  type="password" name="pwd" class="form-control" placeholder="Passwort" aria-label="Passwort">
                    </div>
                    <div class="input-group register-input mb-3">
                        <input type="text" name="email" class="form-control" placeholder="Email" aria-label="Email">
                    </div>
                    <div class="input-group register-input mb-3">
                        <input type="text" name="forename" class="form-control" placeholder="Vorname" aria-label="Vorname">
                        <input type="text" name="surname" class="form-control" placeholder="Nachname" aria-label="Nachname">
                    </div>
                    <div class="input-group register-input mb-3">

                        <input type="text" name="zipcode" class="form-control" placeholder="Postal-Code / ZIP-Code"
                               aria-label="Postal-code">
                    </div>
                    <div class="input-group register-input mb-3">
                        <input type="text" name="phonenr" class="form-control" placeholder="Telefon" aria-label="Telefon">
                    </div>
                    <button type="button" class="btn btn-success register-button"><span>Registrieren</span></button>
                    <input type="submit" value="Login" class="btn btn-secondary"></input>
                </form>
        </div>
    </div>
</div>
<?php echo file_get_contents('html/footer.html'); ?>
</body>