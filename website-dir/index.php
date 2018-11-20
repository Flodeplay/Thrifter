<!DOCTYPE html>
<html lang="de">
<head>
	<?php
    error_reporting(0);
    session_start();
	?>
<title>Thrifter.</title>

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
    <style>
        #headpic{
            background-image: url('assets/index/DSC_9514-4.JPG');background-position: right;
        }
        @media (max-width: 992px) {
            #headpic{
                background-image: url('assets/index/DSC_9662-7.JPG');background-position: top center;
            }
        }
    </style>
<!-- scripts-->
<script src="JS/jquery-3.3.1.min.js"></script>
    <script src="JS/popper.min.js"></script>
    <script src="JS/bootstrap.min.js"></script>
    <script src="JS/vh-fix.js"></script>
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

</head>
<body>
<nav id="nav" class="shadow">
    <img src="assets/logo/Logo.svg">
    <i class="fas fa-bars fa-lg menu-button"></i>
    <div class="sidenav">
        <div class="sidemenu col-md-12 col-lg-6 col-xl-3 shadow">
            <div class="content">
                <ul class="p-0 m-0">
                    <li id="nav-link-1">Home</li>
                    <li id="nav-link-2">Login</li>
                    <li id="nav-link-3">Impressum</li>

                </ul>
                <hr id="nav-link-4">
                <div id="nav-link-5" class="row font-weight-bold justify-content-center mt-5"><i class="fab fa-instagram mx-3 fa-2x"></i><i
                            class="fab fa-facebook-f fa-2x mx-3"></i><i class="fab fa-twitter fa-2x mx-3"></i></div>
                <div  id="nav-link-6" class="my-3 h4 text-center">office@Thrifter.at</div>
                <div class="sidemenu-close-btn text-white text-center"><i class="fas fa-chevron-up fa-2x"></i></div>
            </div>
        </div>
        <div class="sidemenu-spacing d-none d-lg-block col-lg-6 col-xl-9 order-first">
        </div>
    </div>
</nav>
<main>
    <section class="position-relative">
        <div class="back-img" id="headpic" style="height: calc(100vh - 60px)"></div>
        <div class="img-overlay text-white display-3 text-center">
            <div class="content">
                Hast du noch Platz im Kleiderschrank?
                <div>
                    <button type="button" class="btn btn-outline-light btn-lg" data-toggle="modal" data-target="#login-modal">
                        Anmelden!
                    </button>
                </div>
            </div>
        </div>
        <div class="scrolldown text-white text-center"><i class="fas fa-chevron-down fa-2x"></i></div>
    </section>
    <section class="full-height-section w-1024 d-flex flex-column justify-content-center pl-4">

        <h1 style="border-left: 4px #FF6A79 solid;padding-left: 10px" class="mb-3">Auf der Suche nach etwas neuem Alten?<br></h1>
        <h2 style="border-left: 4px #8DB solid;padding-left: 10px">Starte noch heute mit Thrifter.</h2>
        <a class="btn btn-dark w-auto mt-3 text-white btn-lg" data-toggle="modal" data-target="#login-modal">
            Anmelden | Registrieren
        </a>
        <div class="row pt-5">
            <div class="product-outer col-6 col-sm-4 col-md-3 col-xl-3">
                <div class="card product">
                    <div class="card-img-top">
                        <img src="assets/_DSC1438.jpg" class="img-fluid card-img-top ">
                    </div>
                    <div class="card-body">
                        <div class="row justify-content-between align-items-center">
                            <div class="h2" class="product-name">Adidas Pullover</div>
                            <div class="h2" class="product-name">43€</div>
                        </div>
                        <div class="row justify-content-between align-items-center">
                            <div class="h6" class="product-user" >Patryk</div>
                            <div class="h6" class="product-loc">Wien</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product-outer col-6 col-sm-4 col-md-3 col-xl-3">
                <div class="card product">
                    <div class="card-img-top">
                        <img src="assets/DSC_9662-7.JPG" class="img-fluid card-img-top ">
                    </div>
                    <div class="card-body">
                        <div class="row justify-content-between align-items-center">
                            <div class="h2" class="product-name">Adidas Pullover</div>
                            <div class="h2" class="product-name">43€</div>
                        </div>
                        <div class="row justify-content-between align-items-center">
                            <div class="h6" class="product-user" >Patryk</div>
                            <div class="h6" class="product-loc">Wien</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="scrolldown text-center"><i class="fas fa-chevron-down fa-2x"></i></div>
    </section>
    <section class="position-relative full-height-section">
        <div class="back-img" style="background-image: url('assets/index/_DSC1438-2.jpg'); height: 100vh"></div>
        <div class="img-overlay text-white display-4 text-center">
            <div class="content">
                "Früher Deins, Heute Meins"
            </div>
        </div>
        <div class="scrolldown text-white text-center"><i class="fas fa-chevron-down fa-2x"></i></div>
    </section>
    <section class="full-height-section d-flex align-items-center p-5">
        <blockquote class="blockquote">
            <p class="mb-0">Someone that religiously shops at Thrift Stores looking for bargains and often scores
                amazing deals. Often dedicated to recycling and reuse of products to keep our planet "greener".
            </p>
            <footer class="blockquote-footer">Urban Dictionary</footer>
        </blockquote>
        <div class="scrolldown text-center"><i class="fas fa-chevron-down fa-2x"></i></div>
    </section>
</main>
<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="login-modal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header bg-success p-4">
                <h4 class="modal-title text-center" id="Login-title"><i class="fas fa-lock mr-3"></i>Login</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i class="fas fa-times"></i></span>
                </button>
            </div>
            <div class="modal-body">
                <div class="login">
                <form action="app/login.php" method="post" class="login-input">
                    <span>Nutzername</span>
                    <input type="text" name="username" class="form-control" placeholder="ManuelTroll" aria-label="Username">
                    <span>Passwort</span>
                    <input  type="password" name="pwd" class="form-control" placeholder="*******" aria-label="Passwort">
                    <hr>
                    <button type="button" class="btn btn-success rounded-0 w-100 my-1 register-button">Brauchst du ein Konto?</button>
                    <button type="submit" name="submit" value="login" class="btn btn-secondary rounded-0 w-100 my-1">Login</button>
                </form>
                <form action="app/login.php" method="post" class="w-100 register-input">
                    <span>Nutzername</span>
                    <input type="text" name="username" class="form-control" placeholder="ManuelTroll" aria-label="Username">
                    <span>E-Mail</span>
                    <input type="text" name="email" class="form-control" placeholder="Manuel@Thrifter.at" aria-label="Email">
                    <span>Passwort</span>
                    <input  type="password" name="pwd" class="form-control" placeholder="*******" aria-label="Passwort">
                    <span>Vorname | Nachname</span>
                    <div class="row">
                    <input type="text" name="forename" class="form-control w-50" placeholder="Manuel" aria-label="Vorname">
                    <input type="text" name="surname" class="form-control w-50" placeholder="Köllner" aria-label="Nachname">
                    </div>
                    <span>PLZ</span>
                    <input type="text" name="zipcode" class="form-control" placeholder="Postal-Code / ZIP-Code" aria-label="Postal-code">
                    <span>Telefonnummer</span>
                    <input type="text" name="phonenr" class="form-control" placeholder="Telefon" aria-label="Telefon">
                    <button type="button" class="btn btn-success rounded-0 w-100 my-1 login-button">Hast du ein Konto?</button>
                    <button type="submit" name="submit" value="reg"  class="btn btn-secondary rounded-0 w-100 my-1">Registrieren</button>
                </form>
            </div>
        </div>
        </div>
    </div>
</div>
<?php echo file_get_contents('html/footer.html'); ?>
</body>