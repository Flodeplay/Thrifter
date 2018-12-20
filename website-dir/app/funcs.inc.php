<?php
/*
 * Checks if user is logged in
 * @param none
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


/*
 * gibt die Posts von einem user zurück
 * @param user_id, wenn gefüllt dann wird der besagte user gesucht und seine beiträge zurückgegeben
 * @return array
 * @author: Florian Parfuss
 * @date: 19.11.2018
 */
function getPostsbyUser($user_id)
{
    if (isset($user_id)) {
        $query = mysqli_query(establishDB(), "SELECT * FROM p_post WHERE p_u_user = " . $user_id . ";");
        if (mysqli_num_rows($query) > 0) {
            while ($row = mysqli_fetch_assoc($query)) {
                printProduct($row);
            }
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

/*
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

/*
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

function printProduct($row)
{
    echo "<div class=\"product-outer col-12 col-sm-4 col-md-3 col-xl-3\">
                        <div class=\"card product\">
                            <div class=\"card-img-top\">
                                <img src=\"../assets/posts/" . $row["p_image"] . "\" class=\"img-fluid card-img-top \">
                            </div>
                                <div class=\"card-body\">
                                    <div class=\"row justify-content-between align-items-center\">
                                        <div class=\"h2\" class=\"product-name\">" . $row["p_title"] . "</div>
                                        <div class=\"h2\" class=\"product-name\">" . $row["p_price"] . "€</div>
                                    </div>
                                    <div class=\"row justify-content-between align-items-center\">
                                        <div class=\"h6 product-user\">" . $row["u_username"] . "</div>
                                        <div class=\"h6 product-loc\">" . $row["u_zipcode"] . "</div>
                                    </div>
                                </div>
                        </div>
                        </div>";
}

