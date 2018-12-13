<?php
//header('Content-type: text/plain; charset=utf-8');
require_once 'funcs.inc.php';
require_once 'user.php';
session_start();


try {
    $user = $_SESSION["u_user"];
    if ($_POST['email']) {
        $user->inter_u_email($_POST['email']);
    }
    if ($_POST['surname']) {
        $user->inter_u_surname($_POST['surname']);
    }
    if ($_POST['forename']) {
        $user->inter_u_forename($_POST['forename']);
    }
    if ($_POST['birthdate']) {
        $user->inter_u_birthdate($_POST['birthdate']);
    }
    if ($_POST['zipcode']) {
        $user->inter_u_zip($_POST['zipcode']);
    }
    if ($_POST['phonenumber']) {
        $user->inter_u_phonenr($_POST['phonenumber']);
    }
    if ($_POST['description']) {
        $user->inter_u_description($_POST['description']);
    }
    echo 'success';
} catch (Exception $e) {
    //TODO try to show Exception message through ajax in #error_message
    //echo "document.getElementById('error_message').innerHTML = 'Fehler beim Vornehmen der Änderung(en), '.$e->getMessage()";
    //$_POST['data'] = $e->getMessage();
    echo $e->getMessage();
}