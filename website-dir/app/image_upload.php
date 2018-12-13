<?php
/**
 * Created by PhpStorm.
 * User: Manuel
 * Date: 11.12.2018
 * Time: 12:50
 */
require_once 'funcs.inc.php';
require_once 'user.php';
session_start();
checkSession();

// valid extensions
$valid_extensions = array('jpeg', 'jpg', 'png', 'gif', 'tif');
// upload directory
$path = '../assets/users/';

try {
    if (!empty($_FILES['image'])) {
        $user = $_SESSION["u_user"];
        $img = $_FILES['image']['name'];
        $tmp = $_FILES['image']['tmp_name'];

        // get uploaded file's extension
        $ext = strtolower(pathinfo($img, PATHINFO_EXTENSION));
        // can upload same image using rand function
        $final_image = $user->u_id . '.' . $ext;
        // check's valid format
        if (in_array($ext, $valid_extensions)) {
            $path = $path . strtolower($final_image);

            if (move_uploaded_file($tmp, $path)) {
                $conn = establishDB();
                $insert = mysqli_query($conn, "UPDATE u_users SET u_image = '$final_image' WHERE u_id LIKE " . $user->u_id . ";");

            } else {
                throw new Exception('Fehler3');
            }
        } else {
            throw new Exception('Fehler2');
        }
    } else {
        throw new Exception('Fehler1');
    }
} catch (Exception $e) {
    echo $e->getMessage();
}

/*
if($errorimg > 0){

    die('<div class="alert alert-danger" role="alert"> An error occurred while uploading the file </div>');

}

if($myFile['size'] > 500000){

    die('<div class="alert alert-danger" role="alert"> File is too big </div>');

}
*/