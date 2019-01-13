<!DOCTYPE html>
<html lang="de">
<head>
    <?php
    error_reporting(0);
    session_start();
    session_destroy();
    $_SESSION = array();
    ?>
    <title>Thrifter.</title>

    <!-- Meta Tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width = device-width, initial-scale=1, user-scalable=yes">

    <!-- extern stylesheets-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css"
          integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- custom style-->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/footer.css">
    <style>
        #headpic {
            background-image: url('assets/index/DSC_9514-4.JPG');
            background-position: right;
        }

        @media (max-width: 992px) {
            #headpic {
                background-image: url('assets/index/DSC_9662-7.JPG');
                background-position: top center;
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
    <picture>
        <source media="(min-width: 720px)" srcset="assets/logo/Logo.svg">
        <source media="(max-width: 720px)" srcset="assets/logo/Logo-short.svg">
        <img src="assets/logo/Logo.svg" alt="Thrifter.">
    </picture>
    <div class="d-none d-lg-block nav-links">
        <a>Home</a>
        <a>How to?</a>
        <a>Login & Registrieren</a>
    </div>
    <div>
        <a data-toggle="modal"
           data-target="#socialMedia"><i class="fas fa-heart fa-2x text-success"></i></a>
        <a><i class="fas fa-bars fa-2x menu-button"></i></a>
    </div>

    <div class="sidenav">
        <div class="sidemenu col-md-12 col-lg-6 col-xl-3 shadow">
            <div class="content">
                <ul class="p-0 m-0">
                    <li id="nav-link-1"><a href="app/home.php">Home</a></li>
                    <li id="nav-link-2">Login</li>
                    <li id="nav-link-3">Impressum</li>
                </ul>
                <hr>
                <div id="nav-link-5" class="row font-weight-bold justify-content-center mt-5"><i
                            class="fab fa-instagram mx-3 fa-2x"></i><i
                            class="fab fa-facebook-f fa-2x mx-3"></i><i class="fab fa-twitter fa-2x mx-3"></i></div>
                <div id="nav-link-6" class="my-3 h4 text-center">office@Thrifter.at</div>
                <div class="sidemenu-close-btn text-center"><i class="fas fa-chevron-up fa-2x"></i></div>
            </div>
        </div>
        <div class="sidemenu-spacing d-none d-lg-block col-lg-6 col-xl-9 order-first">
        </div>
    </div>
</nav>
<div class="modal fade" tabindex="-1" id="socialMedia" role="dialog" aria-labelledby="" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-0 bg-transparent">
            <div class="modal-header border-0">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true"><i
                                class="fas text-white fa-times fa-lg"></i></span> </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6 d-flex justify-content-center">
                        <a href="https://www.twitter.com/AtThrifter" target="_blank"><i class="fab fa-twitter fa-10x"></i></a>
                    </div>
                    <div class="col-md-6 d-flex justify-content-center">
                        <a href="https://www.instagram.com/thrifter.at" target="_blank"><i class="fab fa-instagram fa-10x"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<main>
    <section class="mw-100 p-0">
        <div class="back-img" id="headpic" style="height: calc(100vh - 60px)"></div>
        <div class="img-overlay text-white display-3 text-center">
            <div class="content">
                Hast du noch Platz im Kleiderschrank?
                <div>
                    <button type="button" class="btn btn-outline-light btn-lg" data-toggle="modal"
                            data-target="#login-modal">
                        Anmelden!
                    </button>
                </div>
            </div>
        </div>
        <div class="scrolldown text-white hover-red"><i class="fas fa-chevron-down fa-2x"></i></div>
    </section>
    <section class="full-height-section row justify-content-center d-flex flex-column bg-dark">
        <div class="col-12 col-md-8 mx-auto text-white">
        <h1 class="my-5 text-center display-2 text-white">Was ist Thrifter?</h1>
        <hr style="border-width: 5px; border-color: var(--red);">
        <p class="my-5 h2 text-center text-white">Thrifter ist eine Second Hand Plattform wo du Kleidung du altes zu neuem machen kannst.</p>
        <p class="text-center"><a class="h3">Hier zeigen wir wie es geht!</a></p>
        </div>
            <div class="scrolldown hover-green"><i class="fas fa-chevron-down fa-2x"></i></div>
    </section>
    <section class="mw-100 full-height-section p-0" >
        <div class="back-img" style="background-image: url('assets/index/_DSC1438-2.jpg'); height: 100vh"></div>
        <div class="img-overlay text-white display-4 text-center">
            <div class="content">
                <h1 class="display-2">
                    "Gestern Deins, Heute Meins"
                </h1>
            </div>
        </div>
        <div class="scrolldown text-white hover-red"><i class="fas fa-chevron-down fa-2x"></i></div>
    </section>
    <section class="full-height-section row justify-content-center d-flex flex-column bg-dark">
        <div class="col-12 col-md-8 mx-auto">
            <h1 class="my-5 text-center display-3 text-white">Anmelden & Registrieren</h1>
            <hr style="border-width: 5px; border-color: var(--green);">
            <div class="form-outer my-5" style="max-width: 700px">
                <div id="error-message"></div>
                <form name="login" action="app/login.php" method="post" onsubmit="return checkLogin()">
                    <input type="text" name="username" class="form-control" placeholder="Nutzername"
                           aria-label="Username">
                    <input type="text" name="email" class="form-control register-input"
                           placeholder="E-Mail" aria-label="Email">
                    <input type="password" name="pwd" class="form-control" placeholder="Passwort"
                           aria-label="Passwort">
                    <div class="row">
                        <input type="text" name="forename" class="form-control register-input w-50 "
                               placeholder="Vorname" aria-label="Vorname">
                        <input type="text" name="surname" class="form-control register-input w-50"
                               placeholder="Nachname" aria-label="Nachname">
                    </div>
                    <input type="text" name="zipcode" class="form-control register-input"
                           placeholder="Postal-Code / ZIP-Code"
                           aria-label="Postal-code">
                    <input type="text" name="phonenr" class="form-control register-input" placeholder="Telefon"
                           aria-label="Telefon">
                    <button type="button"
                            class="btn-login btn-success change-register-button login-input">Brauchst
                        du ein Konto?
                    </button>
                    <button type="button"
                            class="btn-login btn-success change-login-button register-input">Doch
                        lieber anmelden?
                    </button>
                    <button type="submit" name="submit" value="login"
                            class="btn-login btn-secondary login-input">
                        Login
                    </button>
                    <button type="submit" name="submit" value="reg"
                            class="btn-login btn-secondary register-input">
                        Registrieren
                    </button>
                </form>
            </div>
        </div>
        <div class="scrolldown hover-green text-white"><i class="fas fa-chevron-down fa-2x"></i></div>
    </section>
    <section class="full-height-section p-3 d-flex align-items-center">
        <blockquote class="blockquote col-md-6 mx-auto">
            <p class="mb-0 h1">Someone that religiously shops at Thrift Stores looking for bargains and often scores
                amazing deals. Often dedicated to recycling and reuse of products to keep our planet "greener".
            </p>
            <footer class="blockquote-footer h3">Urban Dictionary</footer>
        </blockquote>
        <div class="scrolldown hover-green"><i class="fas fa-chevron-down fa-2x"></i></div>
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
                <div class="form-outer-modal">
                    <div id="error-message"></div>
                    <form name="login" action="app/login.php" method="post" onsubmit="return checkLogin()">
                        <span id="username_text">Nutzername</span>
                        <input type="text" name="username" class="form-control" placeholder="ManuelTroll"
                               aria-label="Username">
                        <span id="email_text" class="register-input">E-Mail</span>
                        <input type="text" name="email" class="form-control register-input"
                               placeholder="Manuel@Thrifter.at" aria-label="Email">
                        <span id="password_text">Passwort</span>
                        <input type="password" name="pwd" class="form-control" placeholder="*******"
                               aria-label="Passwort">
                        <span id="name_text" class="register-input">Vorname | Nachname</span>
                        <div class="row">
                            <input type="text" name="forename" class="form-control register-input w-50 "
                                   placeholder="Manuel" aria-label="Vorname">
                            <input type="text" name="surname" class="form-control register-input w-50"
                                   placeholder="Köllner" aria-label="Nachname">
                        </div>
                        <span id="zip_text" class="register-input">PLZ</span>
                        <input type="text" name="zipcode" class="form-control register-input"
                               placeholder="Postal-Code / ZIP-Code"
                               aria-label="Postal-code">
                        <span id="phonenr_text" class="register-input">Telefonnummer</span>
                        <input type="text" name="phonenr" class="form-control register-input" placeholder="Telefon"
                               aria-label="Telefon">
                        <hr>
                        <button type="button"
                                class="btn btn-success rounded-0 w-100 my-1 change-register-button login-input">Brauchst
                            du ein Konto?
                        </button>
                        <button type="button"
                                class="btn btn-success rounded-0 w-100 my-1 change-login-button register-input">Doch
                            lieber anmelden?
                        </button>
                        <button type="submit" name="submit" value="login"
                                class="btn btn-secondary rounded-0 w-100 my-1 login-input">
                            Login
                        </button>
                        <button type="submit" name="submit" value="reg"
                                class="btn btn-secondary rounded-0 w-100 my-1 register-input">
                            Registrieren
                        </button>
                    </form>
                    <script>
                        var login = true;

                        /*
                           prüft die login felder
                           @param: none
                           @return: gibt zurück (true/false) ob die eingaben richtig waren
                         */
                        function checkLogin() {
                            resetlogin();
                            var ret = true;
                            var errorstr = "";
                            if (document.login.username.value.length === 0) {
                                errorstr += "Username darf nicht leer sein! \n ";
                                document.login.username.classList.add("input-wrong");
                                document.getElementById("username_text").classList.add("input-wrong-text");
                                ret = false;
                            }
                            if (document.login.pwd.value.length === 0) {
                                errorstr += "Passwort darf nicht leer sein!";
                                document.login.pwd.classList.add("input-wrong");
                                document.getElementById("password_text").classList.add("input-wrong-text");
                                ret = false;
                            }
                            if (!login) {
                                if (document.login.email.value.length > 0) {
                                    var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
                                    if (!re.test(email)) {
                                        errorstr += "Bitte Richtiges Email-Format eingeben";
                                        document.login.email.classList.add("input-wrong");
                                        document.getElementById("email_text").classList.add("input-wrong-text");
                                        ret = false;
                                    }
                                }
                                else {
                                    document.login.email.classList.add("input-wrong");
                                    document.getElementById("email_text").classList.add("input-wrong-text");
                                    errorstr += "Email darf nicht leer sein!";
                                    ret = false;
                                }
                                if (document.login.forename.value.length < 3) {
                                    document.login.forename.classList.add("input-wrong");
                                    document.getElementById("name_text").classList.add("input-wrong-text");
                                    errorstr += "Vorname darf nicht leer sein!";
                                    ret = false;
                                }
                                if (document.login.surname.value.length < 3) {
                                    document.login.surname.classList.add("input-wrong");
                                    document.getElementById("name_text").classList.add("input-wrong-text");
                                    errorstr += "Nachname darf nicht leer sein!";
                                    ret = false;
                                }
                                if (document.login.zipcode.value.length === 0) {
                                    document.login.zipcode.classList.add("input-wrong");
                                    document.getElementById("zip_text").classList.add("input-wrong-text");
                                    errorstr += "Postleitzahl darf nicht leer sein!";
                                    ret = false;
                                }
                                if (document.login.phonenr.value.length === 0) {
                                    document.login.phonenr.classList.add("input-wrong");
                                    document.getElementById("phonenr_text").classList.add("input-wrong-text");
                                    errorstr += "Telefonnummer darf nicht leer sein!";
                                    ret = false;
                                }
                            }
                            if (!ret) {
                                $("#error-message").text(errorstr);
                            }

                            return ret;
                        }

                        function resetlogin() {
                            try {
                                var c = document.login.children;
                                for (let i = 0; i < 13; i++) {
                                    if (c[i].classList.contains("input-wrong") || c[i].classList.contains("input-wrong-text")) {
                                        c[i].classList.remove("input-wrong");
                                        c[i].classList.remove("input-wrong-text");
                                    }
                                    else {
                                        var x = c[i].children;
                                        for (let i = 0; i < x.length; x++) {
                                            if (x[i].classList.contains("input-wrong") || x[i].classList.contains("input-wrong-text")) {
                                                x[i].classList.remove("input-wrong");
                                                x[i].classList.remove("input-wrong-text");
                                            }
                                        }
                                    }
                                }
                                $("#error-message").text("");
                            }
                            catch (e) {
                                console.log(e);
                            }
                        }

                        $(".change-register-button,.change-login-button").click(function () {
                            login = !login;
                            resetlogin();
                            $(".register-input").toggle();
                            $(".login-input").toggle();
                        });
                    </script>
                </div>
            </div>
        </div>
    </div>
</div>
<section>
    <footer class="footer">
        <div class="display-3">"Gestern Deins, Heute Meins"</div>
    </footer>
</section>
<div class="links">
    <div class="links-inner w-100">
        <div class="row" style="margin-bottom: 100px">
            <div class="col-9">
                <h1 class="text-success mb-3"><img src="assets/logo/Logo.svg" style="height: 3rem"> </h1>
                <h5 class="mt-4 font-weight-bold" style="letter-spacing: 1.5px"><a class="mx-3">Link1</a><a class="mx-3">Link1</a><a class="mx-3">Link1</a><a class="mx-3">Link1</a></h5>
            </div>
            <div class="col-3 justify-content-center align-content-end">
                <a data-toggle="modal"
                   data-target="#socialMedia">
                <i class="fas fa-heart fa-3x text-success"></i>
                </a>
            </div>
        </div>
        <div  style="padding-left: 15px" class="row">
            <div class="col-sm-6">
                <h1>Kontakt</h1>
                <address style="padding-left: 15px">
                    <p>Manuel Köllner</p>
                    <p>Office@Thrifter.at<br>
                        +43 600 4772855</p>
                    <p>1140, Wien</p>
                </address>
            </div>
            <div class="col-sm-6">
                <h1>Links</h1>
                <p>
                    <a></a>
                </p>
            </div>
        </div>
    </div>
    <div class="scrollup text-white text-center"><i class="fas fa-chevron-up fa-2x"></i></div>
</div>
</body>