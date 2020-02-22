<?php
error_reporting(0);
require_once "funcs.inc.php";
session_start();
checkSession();
if(isset($_GET["post"])) {
    try{
        $post = getPostbyID(mysqli_real_escape_string(establishDB(),$_GET["post"]));
        $user = getUserbyID($post->p_u_user);
    }catch (Exception $e){
        unset($post);
        unset($user);
    }
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
    <a onclick="window.history.back();"><i class="fa fa-chevron-left fa-lg"></i></a>
    <span><?php if (isset($post)){echo $post->p_title;}else{echo "Fehler";}?></span>
    <i></i>
</header>
<main class="main-header">
    <section class="mt-lg-5 pt-0 bg-light shadow">
        <?php
        if(isset($post)){
            echo "<div class='row justify-content-end px-4 py-3' style='background-color: #DEDEDE;'>";
            if (checkPostLiked($post->p_id) == true) {
                echo"<a onclick=\"postlike($post->p_id, 'dislike', this)\"><i class=\"fas fa-heart fa-2x text-danger\"></i></a>";
            } else {
                echo "<a onclick=\"postlike($post->p_id, 'like', this)\"><i class=\"fa-2x far fa-heart text-success\"></i></a>";
            }
            echo "</div>";
            echo "<div class='px-4 pt-4'>";
            echo "<div class='row'>";
            echo "<div class='col-md-6 d-flex align-items-center justify-content-center'><img src='../assets/posts/". $post->getPImage() ."' class='rounded-circle img-fluid' style='height: 200px;width: 200px;object-fit: cover;object-position: center'></div>";
            echo "<div class='col-md-6 d-flex flex-column align-items-center justify-content-center pt-4'><h1>". $post->p_title."</h1><div class='row w-100 justify-content-around'><h3 class='col-6 text-left'>".$post->p_price."€</h3></div></div>";
            echo "</div>";
            echo "<hr><h3>Description:</h3>";
            echo "<div class='p-3'>". $post->p_description."</div>";
            echo "<hr><div class='card'><a href='viewuser.php?username=". $user->u_username. "'><div class='card-body'><img style='max-height: 70px; width: auto' class='rounded-circle' src='../assets/users/".$user->u_image."'><span class='pl-3'>". $user->u_username."</span></div></a></div>";
            echo "<hr><h3>Daten:</h3>";
            echo "<div class='row'>
                            <div class='col-4'><p>Stantdort:<br>Kategorie:<br>Größe:<br>Zustand:<br>Farbe:<br>Marke:<br>Geschlecht:</p></div>
                            <div class='col-8'><p>$post->p_location<br>$post->p_ca_category<br>$post->p_s_size<br>$post->p_con_condition<br>$post->p_col_color<br>$post->p_b_brand<br>$post->p_g_gender</p></div></div></div>";
        }
        else{
            echo "<section class='d-flex full-height-section align-items-center justify-content-center'><div>Fehler! <a href='../index.php'>Hier gehts zurück!</div></a></section>";
        }
        ?>
    </section>
</main>
</body>
</html>
