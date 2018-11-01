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
<?php echo file_get_contents('html/head1.html'); ?>
<title>Thrifter. Home</title>
<?php echo file_get_contents('html/head2.html'); ?>
<body>
<?php echo file_get_contents('html/navbarTop.html'); ?>
<main>
<?php echo "<p>Hallo " . $_SESSION["username"] . "</p>"; ?>
</main>
</body>
