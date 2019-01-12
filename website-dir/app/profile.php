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
<?php echo file_get_contents('../html/navs.html'); ?>
<header class="shadow">
        <a href="home.php"><i class="fa fa-chevron-left fa-lg"></i></a>
        <span>Profil</span>
        <i></i>
</header>
<main class="main-header">
    <section>
        <div class="row">
            <div class="col-md-6 d-flex justify-content-center">
                <label class="btn btn-default btn-file">
                    <?php echo "<img src=\"../assets/users/".$_SESSION['u_user']->u_image."\" class=\"rounded-circle img-fluid\" style=\"max-height: 150px;\">"; ?>
                    <input type="file" name="image" id="imageChange" style="display: none;" aria-label="Image" accept="image/*">
                </label>
                <br>
                <div>
                    <span id="suc" class="text-success"></span>
                    <span id="err" class="text-danger"></span>
                </div>

                <!--<span id="err_message" class="text-danger"></span>
                <span id="suc" class="text-success"></span>
                <span id="err" class="text-danger"></span>-->

                <script>
                    $(document).ready(function() {
                        $('#imageChange').change(function(e){
                            e.preventDefault();
                            var file_data = $('#imageChange').prop('files')[0];
                            var form_data = new FormData();
                            form_data.append('image', file_data);
                            $.ajax({
                                url: "image_upload.php",
                                type: "POST",
                                data: form_data,
                                contentType: false,
                                cache: false,
                                processData: false,
                                //TODO when limit exceeded, return better value
                                success: function(data){
                                    if (data=='successful') {
                                        //alert('Ging' + data);
                                        $('#suc').fadeIn().html(data);
                                        setTimeout(function () {
                                            $('#suc').fadeOut('Slow');
                                            window.location.reload();
                                        }, 800);
                                        //window.location.reload();
                                    } else {
                                        //alert('Ging nicht' + data);
                                        $('#err').fadeIn().html('<b>Fehler bei der Änderung des Profilbildes: </b>' + data);
                                    }
                                },
                                error: function (e) {
                                    $('#err').fadeIn().html(e);
                                }
                            });
                        });
                    });
                </script>

                <!--
                <form id="form" action="image_upload.php" method="post" enctype="multipart/form-data">
                    <input type="file" name="image" id="uploadImage" class="form-control" placeholder="<?php echo $_SESSION['u_user']->u_image;?>" aria-label="Image" accept="image/*">
                    <div id="preview"><img src="filed.png" /></div><br>
                    <input class="btn btn-success" type="submit" value="Upload">
                </form>

                <div id="err"></div>

                <script>
                    $(document).ready(function (e) {
                        $("#imageChange").change(function(e) {
                            e.preventDefault();
                            $.ajax({
                                url: "image_upload.php",
                                type: "POST",
                                data:  new FormData(this),
                                contentType: false,
                                cache: false,
                                processData:false,
                                beforeSend : function()
                                {
                                    //$("#preview").fadeOut();
                                    $("#err_message").fadeOut();
                                },
                                success: function(data)
                                {
                                    if(data=='invalid')
                                    {
                                        // invalid file format.
                                        $("#err_message").html("Invalid File !").fadeIn();
                                    }
                                    else
                                    {
                                        window.location.reload();
                                        // view uploaded file.
                                        //$("#preview").html(data).fadeIn();
                                        //$("#form")[0].reset();
                                    }
                                },
                                error: function(e)
                                {
                                    $("#err_message").html(e).fadeIn();
                                }
                            });
                        });
                    });
                </script>
                -->
            </div>
            <div class="col-md-6">
                <?php echo "<div class=\"display-4 text-center\">". $_SESSION['u_user']->u_forename . "<br>" . $_SESSION['u_user']->u_surname . "</div><h2>" . $_SESSION["u_username"] ."</h2>" ?>
                <?php echo "<p>" . $_SESSION["u_user"]->u_description . "</p>" ?>
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
                                    var phonenumber = $('#phonenumber').val();
                                    var description = $('#description').val();
                                    if (email == '' && surname == '' && forename == '' && birthdate == '' && zipcode == '' && phonenumber == '' && description == '') {
                                        $('#error_message').html("Keine Änderungen vorgenommen!");
                                    } else {
                                        $.ajax({
                                            url: "reg.php",
                                            method: "POST",
                                            data: {email:email, surname:surname, forename:forename, birthdate:birthdate, zipcode:zipcode, phonenumber:phonenumber, description:description},
                                            success:function (data) {
                                                /*
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
                                                */
                                                if (data != 'success')  {
                                                    $('#error_message').html(data);
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
                        <label>Profilbild</label>
                        <br>
                        <label class="btn btn-default btn-file">
                            <?php echo "<img src=\"../assets/users/".$_SESSION['u_user']->u_image."\" class=\"rounded-circle img-fluid\" style=\"max-height: 150px;\">"; ?>
                            <input type="file" name="image" id="imageChange" style="display: none;" aria-label="Image" accept="image/*">
                        </label>
                        <span id="err_message" class="text-danger"></span>
                        <span id="suc_message" class="text-success"></span>

                        <script>
                            $(document).ready(function() {
                                $('#imageChange').change(function(){
                                    var file_data = $('#imageChange').prop('files')[0];
                                    var form_data = new FormData();
                                    form_data.append('image', file_data);
                                    $.ajax({
                                        url: "image_upload.php",
                                        type: "POST",
                                        data: form_data,
                                        contentType: false,
                                        cache: false,
                                        processData: false,
                                        //TODO succes doesn't work
                                        success: function(data){
                                            $('#err_message').html('haööp');
                                            //window.location.reload();
                                            if (data != 'success') {
                                                $('#err_message').html(data);
                                            } else {
                                                //window.location.reload();

                                                $('#suc_message').fadeIn().html('Änderungen vorgenommen');
                                                setTimeout(function () {
                                                    $('#suc_message').fadeOut('Slow');
                                                }, 20000);
                                            }
                                        }
                                    });
                                });
                            });
                        </script>
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

                        <div class="container mt-3 p-0">
                            <form role="form" id="contact-form" class="contact-form">
                                <div class="row mb-3 p-0">
                                    <div class="col-md-2 align-self-center text-center">
                                        Betreff
                                    </div>
                                    <div class="col-md-10 p-0">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="subject" autocomplete="off" id="subject" placeholder="ZB.: Fragen zu meinen gespeicherten Daten">
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-12 p-0">
                                        <div class="form-group">
                                            <textarea class="form-control textarea" rows="3" name="Message" id="Message" placeholder="Deine Nachricht"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 pb-3 px-0">
                                        <button type="submit" class="btn btn-secondary rounded-0 w-100 my-1">Frage stellen</button>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </section>
</main>
</body>
</html>