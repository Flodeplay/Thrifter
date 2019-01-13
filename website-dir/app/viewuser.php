<?php
error_reporting(0);
require_once "funcs.inc.php";
session_start();
checkSession();
try{
    $user = getUserbyName(mysqli_real_escape_string(establishDB(),$_GET["username"]));
}catch (Exception $e){
    unset($user);
}

?>
<!DOCTYPE html>
<html lang="en">
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

</head>
<body>
<?php
echo file_get_contents('../html/navs.html');
echo file_get_contents('../html/bottommenu.html');
?>
<header class="shadow">
    <a href="home.php"><i class="fa fa-chevron-left fa-lg"></i></a>
    <span><?php if (isset($user)){echo $user->u_username;}else{echo "Fehler";}?></span>
    <i></i>
</header>
<main class="main-header">
    <section class="bg-light shadow mt-lg-5 px-4">
        <?php
        if (isset($user)) {
            try {
                echo "<div class='row'>
                    <div class='col-md-6 d-flex justify-content-center'>
                            <img src='../assets/users/" . $user->u_image . "' class='rounded-circle img-fluid' style ='max-height: 150px;'>
                    </div>
                    <div class='col-md-6'>
                            <div class='display-4 text-center'>" . $user->u_username . "</h2>
                            <blockquote class='h5 text-muted text-center'>" . $user->u_description . "</blockquote>
                    </div>

                </div>
                </div>";
                echo "<hr><h4>Mehr über " . $user->u_username. ":</h4>";
                echo "<div class='row'>
                            <div class='col-4'><p>Standort:<br>Telefon:<br>E-Mail:<br>Mitglied seit:</p></div>
                            <div class='col-8'><p>$user->u_zipcode<br>$user->u_phonenumber<br>$user->u_email<br>$user->u_createtime</p></div></div>";
                echo "</section>";
                echo "<section>";
                echo "<h3 class='mb-4'>Mehr von " . $user->u_username. ":</h3>";
                getPostsbyUser($user->u_id);
                echo "</section>";
            } catch (Exception $e) {
                echo "Fehler!";
            }
        } else {
            echo "<section class='d-flex full-height-section align-items-center justify-content-center'><div>Fehler! <a href='../index.php'>Hier gehts zurück!</div></a></section>";
        }
        ?>
</main>
</body>
</html>