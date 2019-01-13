<?php
require_once 'funcs.inc.php';
error_reporting(0);
session_destroy();
session_start();
?>
<!DOCTYPE html>
<html lang="de">
<head>
    <!-- Meta Tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width = device-width, initial-scale=1, user-scalable=yes">
    <!-- external stylesheets-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css"
          integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <!-- custom style-->
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="../css/nav.css">
    <!-- scripts-->
    <script src="../JS/jquery-3.3.1.min.js"></script>
    <script src="../JS/popper.min.js"></script>
    <script src="../JS/bootstrap.min.js"></script>
    <script src="../JS/vh-fix.js"></script>
    <script src="../JS/base.js"></script>

    <title>Login - Thrifter.</title>
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
                            $user = new user($data["u_id"], $data["u_username"], $data["u_forename"], $data["u_surname"], $data["u_email"], $data["u_birthdate"], $data["u_createtime"], $data["u_description"], $data["u_image"], $data["u_phonenumber"], $data["u_zipcode"]);
                            $_SESSION["u_user"] = $user;
                            header("Location: home.php");
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
                            if(strlen($pwd) > 8){
                                $pwd = hash("sha384", $_POST["pwd"], FALSE);
                            }
                            else{
                                throw new Exception("Bitte ein Passwort unter 8 Zeichen benutzen");
                            }
                            if (strlen($_POST["zipcode"]) < 11 && strlen($_POST[""]) > 4) {
                                $zipcode = mysqli_real_escape_string($conn, $_POST["zipcode"]);
                            } else {
                                throw new Exception("Falsche Postleitzahl, Bitte eine zwischen 4 und 10 Zeichen nehmen!");
                            }
                            ///Testet Ob Username vorhanden
                            if (isUserbyName($username) || isUserbyEmail($email)) {
                                throw new Exception("Username or Email existiert bereits");
                            }

                            // TODO concat all birthday fields(yyyy-MM-dd) and check if valid -> insert the right way into DB
                            // INSERT INTO u_users (u_birthdate) VALUE (STR_TO_DATE($birthdate['20010501'], '%Y%m%d'));
                            $birthdate = null;

                            mysqli_query($conn, "INSERT INTO u_users (u_username, u_email, u_pwd, u_surname, u_forename, u_birthdate, u_zipcode, u_phonenumber) VALUES ('$username','$email','$pwd','$surname','$forename','$birthdate','$zipcode','$phonenr');");
                            $query = mysqli_query($conn, "SELECT u_id FROM u_users WHERE u_username =' $username '");
                            if (mysqli_num_rows($query) == 1) {
                                $data = mysqli_fetch_assoc($query);
                                $user = new user($data["u_id"], $data["u_username"], $data["u_forename"], $data["u_surname"], $data["u_email"], $data["u_birthdate"], $data["u_createtime"], $data["u_description"], $data["u_image"], $data["u_phonenumber"], $data["u_zipcode"]);
                                $_SESSION["u_user"] = $user;
                                header("Location: home.php");
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