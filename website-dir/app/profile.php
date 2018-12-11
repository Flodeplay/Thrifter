<?php
error_reporting(0);
require_once "funcs.inc.php";
require_once "user.php";
session_start();
checkSession();
?>
<!DOCTYPE html>
<html lang="en">
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
    <title>Profil - Thrifter.</title>
</head>
<body>
<?php echo file_get_contents('../html/navbarTop.html'); ?>
<header class="shadow">
        <a href="home.php"><i class="fa fa-chevron-left fa-lg"></i></a>
        <span>Profil</span>
        <i></i>
</header>
<main class="main-header">
    <section>
        <div class="row">
            <div class="col-md-6 d-flex justify-content-center">
                <?php echo "<img src=\"../assets/users/".$_SESSION['u_user']->u_image."\" class=\"rounded-circle img-fluid\" style=\"max-height: 150px;\">"; ?>
                </div>
            <div class="col-md-6">
                <?php echo "<div class=\"display-4 text-center\">". $_SESSION['u_user']->u_forename . "<br>" . $_SESSION['u_user']->u_surname . "</div><h2>" . $_SESSION["u_username"] ."</h2>" ?>

            </div>
        </div>
    </section>
    <hr>
    <section>
        <div id="accordion">
            <div class="card">
                <div class="card-header" id="headingOne">
                    <h5 class="mb-0">
                        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Persönliche Daten ändern
                        </button>
                    </h5>
                </div>

                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                    <div class="card-body">
                        <form class="login-input" id="submit_form">
                            <label>E-Mail Adresse</label>
                            <input type="text" name="email" id="email" class="form-control" placeholder="<?php echo $_SESSION['u_user']->u_email;?>" aria-label="EMail">
                            <label>Nachname</label>
                            <input type="text" name="surname" id="surname" class="form-control" placeholder="<?php echo $_SESSION['u_user']->u_surname;?>" aria-label="Surname">
                            <label>Vorname</label>
                            <input type="text" name="forename" id="forename" class="form-control" placeholder="<?php echo $_SESSION['u_user']->u_forename;?>" aria-label="Forename">
                            <label>Geburtstag</label>
                            <input type="text" name="birthdate" id="birthdate" class="form-control" placeholder="<?php echo $_SESSION['u_user']->u_birthdate;?>" aria-label="Birthdate">
                            <label>Postleitzahl</label>
                            <input type="text" name="zipcode" id="zipcode" class="form-control" placeholder="<?php echo $_SESSION['u_user']->u_zipcode;?>" aria-label="Zipcode">
                            <label>Profilbild</label>
                            <input type="text" name="image" id="image" class="form-control" placeholder="<?php echo $_SESSION['u_user']->u_image;?>" aria-label="Image">
                            <label>Telefonnummer</label>
                            <input type="text" name="phonenumber" id="phonenumber" class="form-control" placeholder="<?php echo $_SESSION['u_user']->u_phonenumber;?>" aria-label="phonenumber">
                            <label>Beschreibung</label>
                            <input type="text" name="description" id="description" class="form-control" placeholder="<?php echo $_SESSION['u_user']->u_description;?>" aria-label="Description">



                            <br />
                            <input type="button" name="submit" id="submit" class="btn btn-secondary rounded-0 w-100 my-1" value="Submit" />
                            <span id="error_message" class="text-danger"></span>
                            <span id="success_message" class="text-success"></span>
                        </form>
                        <script>
                            //TODO birtdate -> calendar field to choose
                            //TODO passsword -> 2 fields which gets compared if equal
                            //TODO image -> option to upload new one (Button)
                            $(document).ready(function () {
                                $('#submit').click(function () {
                                    var email  = $('#email').val();
                                    var surname = $('#surname').val();
                                    var forename = $('#forename').val();
                                    var birthdate = $('#birthdate').val();
                                    var zipcode = $('#zipcode').val();
                                    var image = $('#image').val();
                                    var phonenumber = $('#phonenumber').val();
                                    var description = $('#description').val();
                                    if (email == '' && surname == '' && forename == '' && birthdate == '' && zipcode == '' && image == '' && phonenumber == '' && description == '') {
                                        $('#error_message').html("Keine Änderungen vorgenommen!");
                                    } else {
                                        $('#error_message').html('');
                                        $.ajax({
                                            url: "reg.php",
                                            method: "POST",
                                            data: {email:email, surname:surname, forename:forename, birthdate:birthdate, zipcode:zipcode, image:image, phonenumber:phonenumber, description:description},
                                            success:function (data) {
                                                if (data == 'error') {
                                                    $('#error_message').html('Fehler beim Vornehmen der Änderung(en)');
                                                } else {
                                                    $('form').trigger('reset');

                                                    //TODO find better way to update the placeholders w/ SESSION-data
                                                    window.location.reload();

                                                    $('#success_message').fadeIn().html('Änderungen vorgenommen');
                                                    setTimeout(function () {
                                                        $('#success_message').fadeOut('Slow');
                                                    }, 20000);
                                                }
                                            }
                                        });
                                    }
                                });
                            });
                        </script>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingTwo">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Weitere Informationen
                        </button>
                    </h5>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                    <div class="card-body">

                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingThree">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Fragen zu deinem Konto?
                        </button>
                    </h5>
                </div>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                    <div class="card-body">

                    </div>
                </div>
            </div>
        </div>

    </section>
</main>
</body>
</html>