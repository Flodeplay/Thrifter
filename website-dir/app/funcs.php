<?php
/**
 * Created by PhpStorm.
 * User: flori
 * Date: 19.11.2018
 * Time: 10:16
 */
function checkSession()
{
    if (!isset($_SESSION["user_id"])) {
        header("Location: ../index.php");
    }
}
function establishDB(){
    require_once "config.php";
    $conn = new mysqli(DB_HOST,DB_USER, DB_PWD, DB_NAME);
    return $conn;
}
function getWishlist()
{
    $user = $_SESSION['user_id'];
    $conn = establishDB();
    $query = mysqli_query($conn, "Select * from thrifter.f_favorites inner join thrifter.p_post on p_post.p_id = f_p_post where f_u_user = '$user'");
    if (mysqli_num_rows($query) > 0) {
        while ($row = mysqli_fetch_assoc($query)) {
            echo $row['p_title'];
        }
    } else {
        echo "Keine Produke vorhanden";
    }
}