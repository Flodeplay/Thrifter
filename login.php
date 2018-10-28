<!DOCTYPE html>
<html lang="de">
<head>
    <title>Thrifter.</title>

    <!-- Meta Tags-->
    <meta charset="UTF-8">
    <meta name = "viewport" content = "width = device-width, initial-scale=1, user-scalable=yes">

    <!-- extern stylesheets-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
          integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- custom style-->
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/nav.css">
    <link rel="stylesheet" href="./css/footer.css">
    <link rel="stylesheet" href="./css/login.css">

    <!-- scripts-->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
            crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
            crossorigin="anonymous"></script>
</head>
<body>
<nav id="nav">
    <img src="assets/Logo.svg">
    <i class="fas fa-bars fa-lg"></i>
</nav>
<main>
    <div>
        <div style="background-image: url('assets/_DSC1438.jpg'); background-size: cover; background-position: center; height: 100vh"></div>
        <div style="position: absolute; top: 50%; transform: translateY(-50%)" class="text-white display-4 text-center"> Früher Deins, Heute Meins <div><button type="button" class="btn btn-outline-light btn-lg" href="#" data-toggle="modal" data-target="#login-modal">Anmelden</button></div></div>

        <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
            <div class="modal-dialog">
                <div class="loginmodal-container">
                    <h1>Login to Your Account</h1><br>
                    <form>
                        <input type="text" name="user" placeholder="Username">
                        <input type="password" name="pass" placeholder="Password">
                        <input type="submit" name="login" class="login loginmodal-submit" value="Login">
                    </form>

                    <div class="login-help">
                        <a href="#">Register</a> - <a href="#">Forgot Password</a>
                    </div>
                </div>
            </div>
        </div>


    </div>
</main>
<footer>
    <img src="assets/Logo.svg">
    <div class="display-4">"Früher Deins,<br> Heute Meins"</div>
    <div class="row font-weight-bold justify-content-center mt-5"><i class="fab fa-instagram mx-3 fa-2x"></i><i class="fab fa-facebook-f fa-2x mx-3"></i><i class="fab fa-twitter fa-2x mx-3"></i><span style="border-left: 1px solid black" class="mx-3"></span><span class="mx-3 h3">office@Thrifter.at</span></div>
</footer>
</body>
</html>