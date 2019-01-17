<?php
require_once 'funcs.inc.php';
session_start();

try {
    $user = $_SESSION["u_user"];
    if (empty($_FILES['picture'])) {
        throw new Exception('Wir brauchen noch ein Titelbild!');
    } else if (strlen($_POST['titleT']) < 5) {
        throw new Exception('Dein Titel ist bisschen kurz!');
    } else if (strlen($_POST['descriptionT']) < 5 || strlen($_POST['description']) > 250){
        throw new Exception('Deine Beschreibung muss zwischen 5 und 250 Zeichen enthalten!');
    } else if ($_POST['priceT'] < 0 || $_POST['price'] > 9999) {
        throw new Exception('Dein Preis ist entweder zu hoch oder zu niedrig!');
    } else {
        $conn = establishDB();

        $title = mysqli_real_escape_string($conn, $_POST['titleT']);
        $image = 'temp';
        $description = mysqli_real_escape_string($conn, $_POST['descriptionT']);
        $price = $_POST['priceT'];
        $color = $_POST['colorT'];
        $brand = $_POST['brandT'];
        $gender = $_POST['genderT'];
        $condition = $_POST['conditionT'];
        $category = $_POST['categoryT'];
        $size = $_POST['sizeT'];

        mysqli_query($conn, "INSERT INTO p_post (p_title, p_price, p_image, p_description, p_u_user, p_col_color, p_b_brand, p_g_gender, p_con_condition, p_ca_category, p_s_size) VALUES ('$title','$price','$image','$description','$user->u_id','$color','$brand','$gender','$condition','$category','$size');");

        $query = mysqli_query($conn, "SELECT p_id FROM p_post WHERE p_title LIKE '$title' && p_description LIKE '$description' && p_u_user LIKE '$user->u_id'");
        if (mysqli_num_rows($query) == 1) {
            $data = mysqli_fetch_assoc($query);
            $pID = $data['p_id'];

            $valid_extensions = array('jpeg', 'jpg', 'png', 'gif', 'tif');
            $path = '../assets/posts/';
            if (!empty($_FILES['picture'])) {
                $user = $_SESSION["u_user"];
                $img = $_FILES['picture']['name'];
                $tmp = $_FILES['picture']['tmp_name'];

                // get uploaded file's extension
                $ext = strtolower(pathinfo($img, PATHINFO_EXTENSION));
                // can upload same image using rand function
                $final_image = $pID . '.' . $ext;
                // check's valid format
                if (in_array($ext, $valid_extensions)) {
                    $path = $path . strtolower($final_image);

                    if (move_uploaded_file($tmp, $path)) {
                        $conn = establishDB();
                        $update = mysqli_query($conn, "UPDATE p_post SET p_image = '$final_image' WHERE p_id LIKE '$pID';");
                        echo 'success';
                    } else {
                        throw new Exception('Fehler3');
                    }
                } else {
                    throw new Exception('Fehler2');
                }
            } else {
                throw new Exception('Fehler1');
            }
        } else {
            throw new Exception('Unbekannter Fehler beim Erstellen. Bitte wende dich an unser Support-Team oder versuch es nocheinmal!');
        }
    }
} catch (Exception $e) {
    echo $e->getMessage();
}