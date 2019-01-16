<?php
require "funcs.inc.php";
error_reporting(0);
session_start();
checkSession();
?>
<!DOCTYPE html>
<html lang="de">
<head>
    <title>Thrift-it.</title>
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
    <script>
        $(document).ready(function() {
            var result = $("#thrift-it");
            $.get("compute-timeline.php", {count: 1, method: "thrift-it"}).done(function (data) {
                result.html(data);
            });
        });
    </script>
</head>
<body style="overflow: hidden; background-color: #a9a9a9">
<?php
echo file_get_contents('../html/navs.html');
echo file_get_contents('../html/bottommenu.html');
?>
<header class="shadow">
    <a onclick="window.history.back();"><i class="fa fa-chevron-left fa-lg"></i></a>
    <span>Thrift-it</span>
    <span></span>
</header>
<main>
    <section id="thrift-it" class="p-0 px-3">

    </section>
</main>

</body>
</html>