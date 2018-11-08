<head>
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
    <script src="content/JS/jquery-3.3.1.min.js"></script>
    <script src="JS/popper.min.js"></script>
    <script src="JS/bootstrap.min.js"></script>
    <script src="JS/base.js"></script>
<title>Thrifter. Home</title>
</head>
<body>
<?php echo file_get_contents('html/navbarTop.html'); ?>
<main>
<section class="d-flex flex-column align-items-center p-5 justify-content-center" style="height: calc(100vh - 60px)">
<?php
    error_reporting(0);
    session_start();
    if (isset($_POST["username"])) {
        if ($_POST["username"] == "admin" && $_POST["pwd"] == "root") {
            $_SESSION["username"] = $_POST["username"];
        }
    }

    if (!$_SESSION["username"]) {
        exit(file_get_contents('html/sessionFail.html'));
    }
?>
<?php echo "<h1 class='display-4'>Hallo,<br> " . $_SESSION["username"] . "</h1>"; ?>
</section>
</main>
</body>
