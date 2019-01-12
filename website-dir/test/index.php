<?php
error_reporting(0);
require_once "../app/funcs.inc.php";
require_once "../app/user.php";
session_start();
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
    <span>Post</span>
</header>
<main class="main-header">
    <form name="post" action="index.php" method="get">
        <label>
            <input name="post" type="text">
        </label>
        <button type="submit" class="btn btn-secondary rounded-0 w-100 my-1">
            Registrieren
        </button>
    </form>
    <section class="bg-light p-2">
        <?php
            if(isset($_GET["post"])){
                $post = getPostbyID($_GET["post"]);
                $user = getUserbyID($post->p_u_user);
                echo  $post->__toString2();
                echo "<div class='row'>";
                echo "<div class='col-md-6 d-flex align-items-center justify-content-center'><img src='../assets/posts/". $post->getPImage() ."' class='rounded-circle img-fluid' style='max-height: 150px;'></div>";
                echo "<div class='col-md-6 d-flex flex-column align-items-center justify-content-center pt-4'><h1>". $post->p_title."</h1><div class='row w-100 justify-content-around'><h3 class='col-6 text-left'>".$post->p_price."€</h3><h3  class='col-6 text-right'>$post->p_location</h3> </div></div>";
                echo "</div>";
                echo "<hr><h3>Description:</h3>";
                echo "<div class='p-3'>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea tak</div>";
                echo "<hr><div class='card'><div class='card-body'><img style='max-height: 70px; width: auto' class='rounded-circle' src='../assets/users/".$user->u_image."'><span class='pl-3'>". $user->u_username."</span></div></div>";
                echo "<hr><h3>Daten:</h3>";
                echo "<div class='row'><div></div>";
            }
            else{
                echo "<section class='d-flex full-height-section align-items-center justify-content-center'><div>Fehler! <a href='../index.php'>Hier gehts zurück!</div></a></section>";
            }
        ?>
    </section>
</main>
</body>
</html>