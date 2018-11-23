<?php
/**
 * Created by PhpStorm.
 * User: flori
 * Date: 19.11.2018
 * Time: 10:16
 */


/*
 * Checks if User is logged in
 * @param none
 * @Author: Manuel Köllner
 * @Date: 20.11.2018
 */
function checkSession()
{
    if (!isset($_SESSION["user_id"])) {
        header("Location: ../index.php");
    }
}

/*
 * Establishes Database connection
 * @praram none
 * @return returns connection
 * @Exception: throws exeption wenn verbindung nicht hergestellt werden konnte.
 * @Author: Manuel Köllner
 * @Date: 20.11.2018
 */
function establishDB(){
    require_once "config.php";
    $conn = new mysqli(DB_HOST,DB_USER, DB_PWD, DB_NAME);
    if($conn){
        return $conn;
    }
    else{
       throw new Exception("Connection with Database could not be accomplished!");
    }
}

/*
 * gibt die Wishlist des angemeldeten Users zurück
 * @param none
 * @return array
 * @author: Florian Parfuss
 * @date: 19.11.2018
 *
 */
//TODO CODE OPTIMIEREN!!!!!!!!!!!!!!
function getWishlist($range)
{
    //TODO check if inline session access works!
    $query = mysqli_query(establishDB(), "SELECT * FROM f_favorites INNER JOIN p_post ON f_favorites.f_p_post = p_post.p_id
                        INNER JOIN u_users ON p_post.p_u_user = u_users.u_id WHERE f_u_user = " . $_SESSION['user_id'] .";");
    if (mysqli_num_rows($query) > 0) {
        if(isset($range)){
            $index = 0;
            //Todo get Range to work
            while ($row = mysqli_fetch_assoc($query)) {
                printProduct($row);
            }
        }
        else{
            while ($row = mysqli_fetch_assoc($query)) {
                printProduct($row);
            }
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
        $query = mysqli_query(establishDB(), "SELECT * FROM p_post WHERE p_u_user = ".$_SESSION['user_id'].";");
        if (mysqli_num_rows($query) > 0) {
            while ($row = mysqli_fetch_assoc($query)) {
                echo $row['p_title'];
            }
        } else {
            echo "Keine Produke vorhanden";
        }

    }
    else{
        //TODO check if user is valid
        //TODO return rows
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
        //TODO trow exeption is param is null or empty
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
        //TODO trow exeption is param is null or empty
        throw new Exception("");
    }
}

function printProduct($row){
    echo "<div class=\"product-outer col-12 col-sm-4 col-md-3 col-xl-3\">
                        <div class=\"card product\">
                            <div class=\"card-img-top\">
                                <img src=\"../assets/posts/" . $row["p_image"] ."\" class=\"img-fluid card-img-top \">
                            </div>
                                <div class=\"card-body\">
                                    <div class=\"row justify-content-between align-items-center\">
                                        <div class=\"h2\" class=\"product-name\">" . $row["p_title"] ."</div>
                                        <div class=\"h2\" class=\"product-name\">" . $row["p_price"] ."</div>
                                    </div>
                                    <div class=\"row justify-content-between align-items-center\">
                                        <div class=\"h6 product-user\">" . $row["u_username"] ."</div>
                                        <div class=\"h6 product-loc\">" . $row["u_zipcode"] ."</div>
                                    </div>
                                </div>
                        </div>
                        </div>";
}

function reg_Email($email) {
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $conn = establishDB();
        $queryUpdate = mysqli_query($conn, "UPDATE u_users SET u_email = '$email' WHERE u_id LIKE ".$_SESSION['user_id'].";");
        if (mysqli_affected_rows($queryUpdate) < 1) {
            throw new Exception("Error while updating email!");
        }
    } else {
        throw new Exception("Invalid email!");
    }
}
function reg_Pwd($pwd) {

}
function reg_Surname($surname) {

}
function reg_Forename($forename) {

}
function reg_Birthdate($birthdate) {

}
function reg_Zipcode($zipcode) {

}
function reg_Image($image) {

}
function reg_Phonenumber($phonenr) {

}
function reg_Description($description) {

}