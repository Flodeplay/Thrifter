<?php
session_start();
require_once 'funcs.php';
try {
    if ($_POST['email']) {
        reg_Email($_POST['email']);
    }
    if ($_POST['surname']) {
        echo $_POST['surname'];
    }
    if ($_POST['forename']) {
        echo $_POST['forename'];
    }
    if ($_POST['birthdate']) {
        echo $_POST['birthdate'];
    }
    if ($_POST['zipcode']) {
        echo $_POST['zipcode'];
    }
    if ($_POST['image']) {
        echo $_POST['image'];
    }
    if ($_POST['phonenumber']) {
        echo $_POST['phonenumber'];
    }
    if ($_POST['description']) {
        echo $_POST['description'];
    }
} catch (Exception $e) {
    //TODO try to show Exception message through ajax in #error_message
    //echo "document.getElementById('error_message').innerHTML = 'Fehler beim Vornehmen der Änderung(en), '.$e->getMessage()";
    //$_POST['data'] = $e->getMessage();
    echo 'error';
}