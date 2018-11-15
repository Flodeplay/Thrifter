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
<title>Thrifter. Home</title>
</head>
<body>
<?php echo file_get_contents('html/navbarTop.html'); ?>
<main>
<section class="d-flex flex-column align-items-center p-5 justify-content-center" style="height: calc(100vh - 60px)">
    <?php
    require_once 'config.php';
    error_reporting(0);
    session_start();
    /*
    try {
        $conn = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME, DB_USER, DB_PWD);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connected successfully";
    }
    catch(PDOException $e)
    {
        die("Connection failed: " . $e->getMessage());
    }
    */
    if  (isset($_POST["submit"])) {
        $conn = new mysqli(DB_HOST,DB_USER, DB_PWD, DB_NAME);
        if (conn) {

            if (!empty($_POST["username"]) && !empty($_POST["pwd"])) {
                $user = mysqli_real_escape_string($conn, $_POST["username"]);
                $pwd = hash("sha384", $_POST["pwd"], FALSE);
                //$query = mysqli_query($conn,"SELECT * FROM u_users WHERE u_username = '$user' AND u_pwd LIKE'$pwd';");
                $query = mysqli_query($conn, "SELECT * FROM u_users WHERE u_username = '$user' AND u_pwd LIKE '$pwd';");
                if (mysqli_num_rows($query) == 1) {
                    $data = mysqli_fetch_assoc($query);
                    $_SESSION['user_id'] = $data["u_id"];
                    $_SESSION['username'] = $data["u_username"];
                    echo "<h1 class='display-4'>Hallo,<br> " . $_SESSION["username"] . ".</h1>";
                } else {
                    echo "<h4 class='mb-3 text-danger'>Something went wrong. Please log in again!</h4>";
                    exit(file_get_contents('html/login.html'));
                }
            } else {
                echo "<h4 class='mb-3 text-danger'>Something went wrong. Please log in again!</h4>";
                exit(file_get_contents('html/login.html'));
            }
            mysqli_close($conn);
        } else {
            die("Connection failed: " . mysqli_connect_error());
        }
    } else {

    }
    ?>
</section>
</main>
</body>
