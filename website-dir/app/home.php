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
    <script type="text/javascript" src="../JS/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="../JS/popper.min.js"></script>
    <script type="text/javascript" src="../JS/bootstrap.min.js"></script>
    <script type="text/javascript" src="../JS/base.js"></script>
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
    <i></i>
    <span>Home</span>
    <i id="search" class="fas fa-search fa-lg"></i>
</header>
<div id="search-box">
    <div class="row align-items-center justify-content-center">
        <div class="col-10">
            <input type="text" autocomplete="off" class="form-control" placeholder="Suchen">
        </div>
        <div id="search-cancel" class="text-primary" style="cursor: pointer">fertig</div>
    </div>
    <div id="search-result" >
    </div>
</div>
<main class="main-header">

    <section class="pt-0">
        <?php

        echo "<h1 class='display-4'>Hallo,<br> " . $_SESSION["u_user"]->u_forename . "</h1>";
        ?>
        <hr>
        <div class="row">
            <a href="timeline.php">
            <div style="display: flex; justify-content: center; align-items: center; flex-direction: column; margin: 10px;width: 90px;height: 90px; background-color: #434343; color: white">
                <i class="fas fa-grip-vertical fa-2x"></i>Entdecken
            </div>
            </a>
            <a href="thrift-it.php">
            <div style="display: flex; justify-content: center; align-items: center; flex-direction: column; margin: 10px;width: 90px;height: 90px; background-color: #434343; color: white">
                <i class="fas fa-hand-pointer fa-2x"></i>Thrift-it
            </div>
            </a>
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
        <h1>Merkliste</h1>
        <hr>
            <?php
            /**
             * @var user $user
             */
            $user = $_SESSION["u_user"];
            $user->getWishlist(4);
            echo "<a href='wishlist.php'><h4 class='my-3 text-center'>Mehr</h4></a>";
            ?>
    </section>
    <hr>
    <section class="my-3">
        <div class="h1">Meine Produkte</div>
        <hr>
        <?php
            getPostsbyUser($_SESSION["u_user"]->u_id, 4);
            echo "<a href='meineProdukte.php'><h4 class='my-3 text-center'>Mehr</h4></a>";
        ?>
    </section>

</main>
</body>