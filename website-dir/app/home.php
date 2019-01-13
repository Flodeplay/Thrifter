<?php
require "funcs.inc.php";
error_reporting(0);
session_start();
checkSession();
?>
<!DOCTYPE html>
<html lang="de">
<head>
    <title>Thrifter.</title>

    <!-- Meta Tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width = device-width, initial-scale=1, user-scalable=yes">

    <!-- extern stylesheets-->
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

</head>
<body>
<?php
echo file_get_contents('../html/navs.html');
echo file_get_contents('../html/bottommenu.html');
?>
<header class="shadow">
    <span>Home</span>
</header>
<main class="main-header">
    <section class="pt-0">
        <?php

        echo "<h1 class='display-3'>Hallo,<br> " . $_SESSION["u_user"]->u_forename . "</h1>";
        ?>
        <hr>
        <div class="row">
            <div style="display: flex; justify-content: center; align-items: center; flex-direction: column; margin: 10px;width: 90px;height: 90px; background-color: #434343; color: white">
                <i class="fas fa-map-marker-alt fa-2x"></i>Map
            </div>
            <a onclick="addnewPost()">
                <div style="display: flex; justify-content: center; align-items: center; flex-direction: column; margin: 10px;width: 90px;height: 90px; background-color: #434343; color: white">
                    <i class="fas fa-plus fa-2x"></i>Neu
                </div>
            </a>
            <a href="wishlist.php">
                <div style="display: flex; justify-content: center; align-items: center; flex-direction: column; margin: 10px;width: 90px;height: 90px; background-color: #434343; color: white">
                    <i class="fas fa-list-ul fa-2x"></i>Merkliste
                </div>
            </a>
            <a href="profile.php">
                <div style="display: flex; justify-content: center; align-items: center; flex-direction: column; margin: 10px;width: 90px;height: 90px; background-color: #434343; color: white">
                    <i class="fas fa-user fa-2x"></i>Konto
                </div>
            </a>

        </div>
    </section
    <section class="my-3">
        <div class="display-4">Merkliste</div>
        <hr>
            <?php
            /**
             * @var user $user
             */
            $user = $_SESSION["u_user"];
            $user->getWishlist(2);
            echo "<a href='wishlist.php'><h4 class='my-3 text-center'>Mehr</h4></a>";
            ?>
    </section>
    <hr>
    <section class="my-3">
        <div class="display-4">Meine Produkte</div>
        <hr>
        <?php
            getPostsbyUser($_SESSION["u_user"]->u_id, 2);
            echo "<a href='meineProdukte.php'><h4 class='my-3 text-center'>Mehr</h4></a>";
        ?>
    </section>

</main>
</body>