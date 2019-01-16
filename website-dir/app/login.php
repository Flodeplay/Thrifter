<!DOCTYPE html>
<html lang="de">
<head>
    <title>Login - Thrifter.</title>

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

    <?php
    require_once 'funcs.inc.php';
    error_reporting(0);
    session_start();
    ?>
</head>
<body>
<main class="login-main">
    <?php echo file_get_contents('../html/navs.html'); ?>
    <section class="d-flex flex-column align-items-center justify-content-center"
             style="min-height: calc(100vh - 60px);">
        <div style="background-color: #f2f2f2; border-radius: 20px; padding:30px; margin: 20px; max-width: 550px; width: 100%" class="shadow-lg">
        <?php
        if (isset($_POST["submit"])) {
            try {
                $conn = establishDB();
            } catch (Exception $e) {
                echo $e->getMessage();
            }
            if ($conn) {
                switch ($_POST["submit"]) {
                    case "login":
                        $username = mysqli_real_escape_string($conn, $_POST["username"]);
                        $pwd = hash("sha384", $_POST["pwd"], FALSE);
                        $query = mysqli_query($conn, "SELECT * FROM u_users WHERE u_username = '$username' AND u_pwd LIKE '$pwd';");
                        if (mysqli_num_rows($query) == 1) {
                            $data = mysqli_fetch_assoc($query);
                            $user = new user($data["u_id"], $data["u_username"], $data["u_forename"], $data["u_surname"], $data["u_email"], $data["u_createtime"], $data["u_description"], $data["u_image"], $data["u_phonenumber"], $data["u_zipcode"]);
                            $_SESSION["u_user"] = $user;
                            echo "<div class='w-100 d-flex flex-column align-items-center justify-content-center'>";
                            echo "<div class='mx-auto my-3'><i class=\"fas fa-spinner fa-spin fa-4x\"></i></div>";
                            echo "<div>Sie werden gleich weitergeleitet</div>";
                            echo
                            "<script type='text/javascript'>
                                window.location.href = 'home.php';
                                </script></div>";
                        } else {
                            echo "<h4 class='mb-3 text-danger'>Passwort Oder Benutzername ist Falsch!</h4>";
                            exit(file_get_contents('../html/login.html'));
                        }
                        break;
                    case "reg":
                        try {
                            $username = mysqli_real_escape_string($conn, $_POST["username"]);
                            $email = filter_var(mysqli_real_escape_string($conn, $_POST["email"]), FILTER_VALIDATE_EMAIL);
                            $pwd = mysqli_real_escape_string($conn, $_POST["pwd"]);
                            $forename = mysqli_real_escape_string($conn, $_POST["forename"]);
                            $surname = mysqli_real_escape_string($conn, $_POST["surname"]);
                            $phonenr = mysqli_real_escape_string($conn, $_POST["phonenr"]);
                            $pwd = hash("sha384", $_POST["pwd"], FALSE);
                            $zipcode = mysqli_real_escape_string($conn, $_POST["zipcode"]);
                            ///Testet Ob Username vorhanden
                            if (isUserbyName($username) || isUserbyEmail($email)) {
                                throw new Exception("Username or Email existiert bereits");
                            }

                            mysqli_query($conn, "INSERT INTO u_users (u_username, u_email, u_pwd, u_surname, u_forename, u_zipcode, u_phonenumber) VALUES ('$username','$email','$pwd','$surname','$forename','$zipcode','$phonenr');");
                            $query = mysqli_query($conn, "SELECT * FROM u_users WHERE u_username = '$username' AND u_pwd LIKE '$pwd';");
                            if (mysqli_num_rows($query) == 1) {
                                $data = mysqli_fetch_assoc($query);
                                $user = new user($data["u_id"], $data["u_username"], $data["u_forename"], $data["u_surname"], $data["u_email"], $data["u_createtime"], $data["u_description"], $data["u_image"], $data["u_phonenumber"], $data["u_zipcode"]);
                                $_SESSION["u_user"] = $user;
                                echo "<div class='w-100 d-flex flex-column align-items-center justify-content-center'>";
                                echo "<div class='mx-auto my-3'><i class=\"fas fa-spinner fa-spin fa-4x\"></i></div>";
                                echo "<div>Sie werden gleich weitergeleitet</div>";
                                echo /** @lang javascript */
                                "<script type='text/javascript'>
                                window.location.href = 'home.php';
                                </script></div>";
                            }
                        } catch (Exception $e) {
                            echo "<h4 class='mb-3 text-danger'>" . $e->getMessage() . " Please register again!</h4>";
                            exit(file_get_contents('../html/login.html'));
                        }
                        break;
                }
                mysqli_close($conn);
                $conn = null;
            } else {
                die("Connection failed: " . mysqli_connect_error());
            }
        } else {
            exit(file_get_contents('../html/login.html'));
        }
        ?>
        </div>
    </section>
</main>
</body>
</html>