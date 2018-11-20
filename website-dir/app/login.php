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
<title>Thrifter. Home</title>
</head>
<body>
<main>
    <?php echo file_get_contents('../html/navbarTop.html'); ?>
<section class="d-flex flex-column align-items-center justify-content-center" style="height: calc(100vh - 60px)">
    <?php

    require_once 'config.php';
    require_once 'funcs.php';
    error_reporting(0);
    session_start();

    if  (isset($_POST["submit"])) {
        $conn = establishDB();
        if (conn) {
            switch ($_POST["submit"]) {
                case "login":
                    if (!empty($_POST["username"]) && !empty($_POST["pwd"])) {
                        $user = mysqli_real_escape_string($conn, $_POST["username"]);
                        $pwd = hash("sha384", $_POST["pwd"], FALSE);
                        //$query = mysqli_query($conn,"SELECT * FROM u_users WHERE u_username = '$user' AND u_pwd LIKE'$pwd';");
                        $query = mysqli_query($conn, "SELECT * FROM u_users WHERE u_username = '$user' AND u_pwd LIKE '$pwd';");
                        if (mysqli_num_rows($query) == 1) {
                            $data = mysqli_fetch_assoc($query);
                            $_SESSION['user_id'] = $data["u_id"];
                            $_SESSION['username'] = $data["u_username"];
                            $_SESSION['forename'] = $data["u_forename"];
                            header("Location: home.php");
                        } else {
                            echo "<h4 class='mb-3 text-danger'>Something went wrong. Please log in again!</h4>";
                            exit(file_get_contents('../html/login.html'));
                        }
                    } else {
                        echo "<h4 class='mb-3 text-danger'>Something went wrong. Please log in again!</h4>";
                        exit(file_get_contents('../html/login.html'));
                    }
                    break;
                case "reg":
                    try {
                        // TODO field birthday instead of phonenr, because birthday NotNull field in DB
                        if (!empty($_POST["username"]) && !empty($_POST["email"]) && !empty($_POST["pwd"]) && !empty($_POST["forename"]) && !empty($_POST["surname"]) && !empty("zipcode") && !empty($_POST["phonenr"])) {
                            $username = mysqli_real_escape_string($_POST["username"]);
                            $queryUsername = mysqli_query($conn, "SELECT * FROM u_users WHERE u_username = '$username';");
                            if (mysqli_num_rows($queryUsername) > 0) {
                                throw new Exception("User already exists");
                            }
                            if (filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
                                $email = mysqli_real_escape_string($conn, $_POST["email"]);
                            } else {
                                throw new Exception("Invalid email!");
                            }
                            $pwd = hash("sha384", $_POST["pwd"], FALSE);
                            $forename = mysqli_real_escape_string($conn, $_POST["forename"]);
                            $surename = mysqli_real_escape_string($conn, $_POST["surname"]);
                            if (strlen($_POST["zipcode"]) < 11) {
                                $zipcode = mysqli_real_escape_string($conn, $_POST["zipcode"]);
                            } else {
                                throw new Exception("Invalid zipcode, pls use between 0 to 10 chars!");
                            }
                            // TODO concat all birthday fields(yyyy-MM-dd) and check if valid -> insert the right way into DB
                            // INSERT INTO u_users (u_birthdate) VALUE (STR_TO_DATE($birthdate['20010501'], '%Y%m%d'));
                            $birthdate = null;

                            mysqli_query($conn, "INSERT INTO u_users (u_username, u_email, u_pwd, u_surname, u_forename, u_birthdate, u_zipcode) VALUES ('$username','$email','$pwd','$surename','$forename','$birthdate','$zipcode');");
                            if (mysqli_affected_rows() == 1) {
                                $_SESSION['user_id'] = null;
                                $_SESSION['username'] = $username;
                                $_SESSION['forename'] = $forename;
                                header("Location: home.php");
                            } else {
                                throw new Exception("DB: Insert Failure");
                            }
                        } else {
                            throw new Exception("At least one required field was empty");
                        }
                    } catch (Exception $e) {
                        echo "<h4 class='mb-3 text-danger'>".$e->getMessage()." Please register again!</h4>";
                        exit(file_get_contents('../html/login.html'));
                    }
                    break;
                default:
                    break;
            }
            mysqli_close($conn);
            $conn = null;
        } else {
            die("Connection failed: " . mysqli_connect_error());
        }
    } else {
        header("Location: ../index.php");
    }
    ?>
</section>
</main>
</body>
