<?php echo file_get_contents('html/head1.html'); ?>
<title>Thrifter.</title>
<?php echo file_get_contents('html/head2.html'); ?>
<body>
<?php echo file_get_contents('html/navbarTop.html'); ?>
<main>
    <section class="position-relative">
        <div style="background-image: url('assets/_DSC1438.jpg'); background-size: cover; background-position: center; height: calc(100vh - 60px)"></div>
        <div style="position: absolute; top: 50%; transform: translateY(-50%)" class="text-white display-4 text-center">
            Früher Deins, Heute Meins
            <div>
                <button type="button" class="btn btn-outline-light btn-lg" data-toggle="modal" data-target="#login-modal">
                    Anmelden
                </button>
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
        <div class="scrolldown text-white text-center"><i class="fas fa-chevron-down fa-2x"></i></div>
    </section>

</main>
<?php echo file_get_contents('html/footer.html'); ?>
</body>
<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="login-modal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header bg-success">
                <h5 class="modal-title text-center" id="Login-title"><i class="fas fa-lock mr-3"></i>Login</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i class="fas fa-times"></i></span>
                </button>
            </div>
            <div class="modal-body">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Username" aria-label="Username">
                </div>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Passwort" aria-label="Passwort">
                </div>
                <div class="input-group register-input mb-3">
                    <input type="text" class="form-control" placeholder="Email" aria-label="Email">
                </div>
                <div class="input-group register-input mb-3">
                    <input type="text" class="form-control" placeholder="Vorname" aria-label="Vorname">
                    <input type="text" class="form-control" placeholder="Nachname" aria-label="Nachname">
                </div>
                <div class="input-group register-input mb-3">

                    <input type="text" class="form-control" placeholder="Postal-Code / ZIP-Code"
                           aria-label="Postal-code">
                </div>
                <div class="input-group register-input mb-3">
                    <input type="text" class="form-control" placeholder="Telefon" aria-label="Telefon">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success register-button"><span>Registrieren</span></button>
                <button type="button" class="btn btn-secondary"><span>Login</span></button>
            </div>
        </div>
    </div>
</div>
</html>