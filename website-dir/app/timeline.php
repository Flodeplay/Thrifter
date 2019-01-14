<?php
require_once "funcs.inc.php";
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
/*echo file_get_contents('../html/navs.html');*/
echo file_get_contents('../html/bottommenu.html');
?>
<header class="shadow">
    <a href="home.php"><i class="fa fa-chevron-left fa-lg"></i></a>
    <span>Entdecken</span>
    <i id="search" class="fas fa-search fa-lg"></i>
</header>
<main class="main-header p-0">
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
    <section id="timeline" class="d-flex">
        <div class="timeline-product" style="background-color: white; border-bottom: 1px; border-color: #4e555b; max-width: 700px">
            <div style="background-color: white;margin: 0 5px"><a href='viewuser.php?username="franz"'><div class='card-body d-flex flex-row' style="font-size: 85%;"><img style='max-height: 40px; width: auto' class='rounded-circle' src='../assets/users/Bild_Manu.jpg'><div class="d-flex flex-column"><span class='pl-3'>Manuel</span><span class='pl-3'>1120</span></div></div></a></div>
            <img src="../assets/posts/1.png" style="width: 100%; height: auto; max-width: 700px">
            <div style="background-color: white; margin: 10px 20px 0" class="d-flex justify-content-between align-items-center"><h3>Hoodie</h3><i class="fas fa-heart fa-2x text-success"></i></div>
            <div style="background-color: white; margin: 0 10px;padding: 0  10px 10px; border-bottom: 1px solid black; " class="d-flex justify-content-between align-items-center"><h4>100€</h4><a><h4>Mehr</h4></a></div>
        </div>
    </section>
</main>
</body>
</html>