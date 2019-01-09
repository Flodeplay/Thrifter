<?php
require 'post.php';
require 'user.php';
/**
 * Checks if user is logged in
 * @param void
 * @Author: Manuel Köllner
 * @Date: 20.11.2018
 */
function checkSession()
{
    if (!isset($_SESSION["u_user"])) {
        header("Location: login.php");
    }

}

/*
 * Checks if user is logged in
 * @param: none
 * @Author: Florian Parfuss
 * @date: 13.12.2018
 * @return: Boolean (true;false) 
 */
function isSession()
{
    if (isset($_SESSION["u_user"])) {
        return true;
    } else {
        return false;
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
function establishDB()
{
    require_once 'config.php';
    $conn = new mysqli(DB_HOST, DB_USER, DB_PWD, DB_NAME);
    if ($conn) {
        return $conn;
    } else {
        throw new Exception("Connection with Database could not be accomplished!");
    }
}


/**
 * gibt die Posts von einem user zurück
 * @param user->u_id, wenn gefüllt dann wird der besagte user gesucht und seine beiträge zurückgegeben
 * @return bool
 * @author: Florian Parfuss
 * @date: 19.11.2018
 *
 */
function getPostsbyUser($user_id)
{
    if (isset($user_id)) {
        $posts =  array();
        $query = mysqli_query(establishDB(), "SELECT * FROM p_post WHERE p_u_user = " . $user_id . ";");
        if (mysqli_num_rows($query) > 0) {
            $index = 0;
            while ($row = mysqli_fetch_assoc($query)) {
                $posts[$index] = new post($row["p_id"],$row["p_title"],$row["p_price"],$row["p_image"],$row["p_creattime"],$row["u_username"],$row["p_col_color"],$row["p_b_brand"],$row["p_g_gender"],$row["p_ca_category"],$row["p_s_size"],$row["p_location"]);
                $index++;
            }
            printProduct($posts);
            return true;
        } else {
            echo "Keine Produke vorhanden";
            return false;
        }

    } else {
        //TODO check if user is valid
        //TODO return rows
    }
}

/*
 * Gibt EINEN user
 *@param user ID
 *@Exception wirft eine Exception falls die User_ID Null ist
 *@author: florian
 *@Date 19.11.2018
 */
function getUserbyID($user_id)
{
    if (isset($user_id) || !isEmpty()) {
        $query = mysqli_query(establishDB(), "SELECT * FROM u_users WHERE u_id = '$user_id ';");
        if (mysqli_num_rows($query) > 0) {
            while ($row = mysqli_fetch_assoc($query)) {
                return $row;
            }

        } else {
            return false;
        }
    } else {
        //TODO trow exeption is param is null or empty
        throw new Exception("");
    }
}

/*
 * Gibt zurück ob ein User vorhanden ist
 *@param user ID
 *@Exception wirft eine Exception falls die User_ID Null ist
 *@author: florian
 *@Date 19.11.2018
 */
function isUserbyName($username)
{
    $username = mysqli_real_escape_string(establishDB(), $username);
    if (isset($username) || !isEmpty($username)) {
        $query = mysqli_query(establishDB(), "SELECT * FROM u_users WHERE u_username = '$username';");
        if (mysqli_num_rows($query) == 1) {
            return true;
        } else {
            return false;
        }
    } else {
        //TODO trow exeption is param is null or empty
        throw new Exception("");
    }
}

/**
 * Gibt zurück ob ein user vorhanden ist
 *@param user ID
 *@Exception wirft eine Exception falls die User_ID Null ist
 *@author: florian
 *@Date 19.11.2018
 */
function isUserbyEmail($email)
{
    $email = mysqli_real_escape_string(establishDB(), $email);
    if (isset($email) || !isEmpty()) {
        $query = mysqli_query(establishDB(), "SELECT * FROM u_users WHERE u_email = '$email';");
        if (mysqli_num_rows($query) == 1) {
            return true;
        } else {
            return false;
        }
    } else {
        //TODO trow exeption is param is null or empty
        throw new Exception("");
    }
}

/**
 * Gibt zurück ob ein user existiert
 * @param: user ID
 * @Exception: Wird geworfen falls
 * @Author: Florian Parfuss
 * @Date: 19.11.2018
 */
function isUserbyID($user_id)
{
    if (isset($user_id) || !isEmpty()) {
        $query = mysqli_query(establishDB(), "SELECT * FROM u_users WHERE u_id = '$user_id';");
        if (mysqli_num_rows($query) > 0) {
            return true;
        } else {
            return false;
        }
    } else {
        //TODO trow exeption is param is null or empty
        throw new Exception("");
    }
}
/** @var post[] $posts */
function printProduct($posts)
{
    echo "<div class=\"row\">";
    foreach ($posts as $key => $post){
        echo $post->__toString();
    }
    echo "</div>";
}

