<?php
error_reporting(0);
session_start();
require_once "funcs.php";
checkSession();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta Tags-->
    <meta charset="UTF-8">
    <meta name = "viewport" content = "width = device-width, initial-scale=1, user-scalable=yes">

    <!-- external stylesheets-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css"
          integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <!-- custom style-->
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/nav.css">
    <link rel="stylesheet" href="../css/product.css">
    <link rel="stylesheet" href="../css/footer.css">
    <!-- scripts-->
    <script src="../JS/jquery-3.3.1.min.js"></script>
    <script src="../JS/popper.min.js"></script>
    <script src="../JS/bootstrap.min.js"></script>
    <script src="../JS/vh-fix.js"></script>
    <script src="../JS/base.js"></script>
    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="180x180" href="../assets/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../assets/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/favicons/favicon-16x16.png">
    <link rel="manifest" href="../assets/favicons/site.webmanifest">
    <link rel="mask-icon" href="../assets/favicons/safari-pinned-tab.svg" color="#ff6a79">
    <link rel="shortcut icon" href="../assets/favicons/favicon.ico">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="msapplication-config" content="assets/favicons/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
    <title>Thrifter. Profil</title>
</head>
<body>
<?php echo file_get_contents('../html/navbarTop.html'); ?>
<header class="shadow">
        <a href="home.php"><i class="fa fa-chevron-left fa-lg"></i></a>
        <span>Profil</span>
        <i class="fas fa-sliders-h fa-lg"></i>
</header>
<main class="main-header">
    <section>
        <div class="row">
            <div class="col-md-6">
                <?php echo "<img src=\"../assets/users/DSC_4374.jpg\" class=\"rounded-circle img-fluid\" style=\"max-width: 350px; margin: 0 auto \">"; ?>
            </div>
            <div class="col-md-6">
                <?php echo "<div class=\"display-4\">". $_SESSION["u_forename"] . " " . $_SESSION["u_surname"] . "</div><h2>" . $_SESSION["u_username"] ."</h2>" ?>

            </div>
        </div>
    </section>
    <section>
        <form class="login-input">
            <span>Nutzername</span>
            <input type="text" name="username" class="form-control" placeholder="ManuelTroll" aria-label="Username">
            <button type="submit" name="submit" value="login" class="btn btn-secondary rounded-0 w-100 my-1">Submit</button>
        </form>
    </section>
    </div>
</main>
</body>
</html>