<?php
error_reporting(0);
require_once 'funcs.inc.php';
session_start();

try {
    $user = $_SESSION['u_user'];
    if ($_POST['subject'] && $_POST['message']) {
        $conn = establishDB();
        $sub = mysqli_real_escape_string($conn, $_POST['subject']);
        $mes = mysqli_real_escape_string($conn, $_POST['message']);
        $temp = $user->u_id." ".$user->u_username.", ".$user->u_forename.", ".$user->u_surname.", ".$user->u_email;
        $temp = $temp.$mes;

        if (!mail("support@thrifter.at", $sub, $temp, "From: ".$user->u_email)) {
            throw new Exception();
        }
    }
    mail($user->u_email, "Wir haben deine Frage erhalten", "Hallo liebe(r) ".$user->u_forename.", \nwir haben deine E-Mail erhalten und werden uns so rasch wie möglich darum kümmern.\nMit freundlichen Grüßen \nDein Thrifter-Team", "From: noreply@thrifter.at");
    echo 'success';
} catch (Exception $e) {
    echo 'Oh nein, es ist ein Fehler beim Senden aufgetreten. Probiere es bitte nocheinmal!';
}