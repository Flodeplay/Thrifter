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
/*
 * gibt die Wishlist des angemeldeten Users zurück
 * @param none
 * @return array
 * @author: Florian Parfuss
 * @date: 19.11.2018
 *
 */
function getWishlist()
{
    //$user = $_SESSION['user_id'];
    $conn = establishDB();
    //TODO check if inline session access works!
    $query = mysqli_query($conn, "SELECT * FROM f_favorites INNER JOIN p_post ON f_p_post = p_id WHERE f_u_user = ".$_SESSION['user_id'].";");
    if (mysqli_num_rows($query) > 0) {
        while ($row = mysqli_fetch_assoc($query)) {
            echo $row['p_title'];
        }
    } else {
        echo "Keine Produke vorhanden";
    }
}
/*
 * gibt die Posts von einem User zurück
 * @param user_id, wenn gefüllt dann wird der besagte user gesucht. Falls leer wird der angemeldete Nutzer benutzt
 * @return array
 * @author: Florian Parfuss
 * @date: 19.11.2018
 */
function getPostsbyUser($user_id){
    if(!isset($user_id)) {
        //$user_id = $_SESSION['user_id'];
        $conn = establishDB();
        $query = mysqli_query($conn, "SELECT * FROM p_post WHERE p_u_user = ".$_SESSION['user_id'].";");
        if (mysqli_num_rows($query) > 0) {
            while ($row = mysqli_fetch_assoc($query)) {
                echo $row['p_title'];
            }
        } else {
            echo "Keine Produke vorhanden";
        }

    }
    else{
        //check if user is valid
        //return rows
    }
}
/*
 * Gibt EINEN User
 *@param User ID
 *@Exception wirft eine Exception falls die User_ID Null ist
 *@author: florian
 *@Date 19.11.2018
 */
function getUserbyID($user_id){
    if(isset($user_id) || !isEmpty()){
        $query = mysqli_query(establishDB(), "SELECT * FROM u_users WHERE u_id = ". $user_id .";");
        if (mysqli_num_rows($query) > 0) {
            while ($row = mysqli_fetch_assoc($query)) {
                return $row;
            }
        } else {
                return false;
        }
    }
    else{
        //trow exeption is param is null or empty
        throw new Exception("");
    }
}
/*
 * Gibt zurück ob ein User existiert
 * @param: User ID
 * @Exception: Wird geworfen falls
 * @Author: Florian Parfuss
 * @Date: 19.11.2018
 */
function isUserbyID($user_id){
    if(isset($user_id) || !isEmpty()){
        $query = mysqli_query(establishDB(), "SELECT * FROM u_users WHERE u_id = ".$user_id.";");
        if (mysqli_num_rows($query) > 0) {
            return true;
        } else {
            return false;
        }
    }
    else{
        //trow exeption is param is null or empty
        throw new Exception("");
    }
}