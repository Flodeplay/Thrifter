<?php
/**
 * Created by PhpStorm.
 * user: flori
 * Date: 24.11.2018
 * Time: 21:42
 */

include 'interfaces/inter_update.php';

class user implements inter_update
{
    public $u_id;
    public $u_username;
    public $u_forename;
    public $u_surname;
    public $u_email;
    public $u_createtime;
    public $u_description;
    public $u_image;
    public $u_phonenumber;
    public $u_zipcode;

    /**
     * user constructor.
     * @param $u_id
     * @param $u_username
     * @param $u_forename
     * @param $u_surname
     * @param $u_email
     * @param $u_birthdate
     * @param $u_createtime
     * @param $u_description
     * @param $u_image
     * @param $u_phonenumber
     * @param $u_zipcode
     */
    public function __construct($u_id, $u_username, $u_forename, $u_surname, $u_email, $u_createtime, $u_description, $u_image, $u_phonenumber, $u_zipcode)
    {
        $this->u_id = $u_id;
        $this->u_username = $u_username;
        $this->u_forename = $u_forename;
        $this->u_surname = $u_surname;
        $this->u_email = $u_email;
        $this->u_createtime = $u_createtime;
        $this->u_description = $u_description;
        $this->u_image = $u_image;
        $this->u_phonenumber = $u_phonenumber;
        $this->u_zipcode = $u_zipcode;
    }



    /**
     * Gibt die Wishlist eines Users zurück user
     *@param $count int der favourites die zurück gegeben werden soll, standart 10
     *@Exception wirft eine Exception falls die conn nicht established werden konnte
     *@author: florian
     *@Date 10.12.2018
     */
    function getWishlist($count = 10)
    {
        $conn = establishDB();
        $query = mysqli_query($conn, "SELECT p_post.p_id FROM f_favorites INNER JOIN p_post  on f_favorites.f_p_post = p_post.p_id WHERE f_u_user = " . $this->u_id . " LIMIT " . $count . ";");
        if (mysqli_num_rows($query) > 0) {
            $index = 0;
            while ($row = mysqli_fetch_assoc($query)) {
                $posts[$index] = getPostbyID($row["p_id"]);
                $index++;
            }
            printProduct($posts);
            mysqli_close($conn);
        } else {
            echo "Merkliste ist leer!";
        }
    }

    function __toString()
    {
        return "" . $this->u_id;
    }


    /*
     * INTERFACE inter_update SECTION
     *
     * All update functions are getting initialized here
     */
    //TODO PLS CHECK! -> only inter_u_email is throwing a exception and triggers the ajax error field!!
    public function inter_u_email($email)
    {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $conn = establishDB();
            $queryUpdate = mysqli_query($conn, "UPDATE u_users SET u_email = '$email' WHERE u_id LIKE " . $this->u_id . ";");
            $this->u_email = $email;
            mysqli_close($conn);
        } else {
            throw new Exception("Invalid email!");
        }
    }

    public function inter_u_surname($surname)
    {
        if ($surname != null && strlen($surname) >= 2) {
            $conn = establishDB();
            $temp = mysqli_real_escape_string($conn, $surname);
            $queryUpdate = mysqli_query($conn, "UPDATE u_users SET u_surname = '$temp' WHERE u_id LIKE " . $this->u_id . ";");
            $this->u_surname = $temp;
            mysqli_close($conn);
        } else {
            throw new Exception("Invalid surname!");
        }
    }

    public function inter_u_forename($forename)
    {
        if ($forename != null && strlen($forename) >= 2) {
            $conn = establishDB();
            $temp = mysqli_real_escape_string($conn, $forename);
            $queryUpdate = mysqli_query($conn, "UPDATE u_users SET u_forename = '$temp' WHERE u_id LIKE " . $this->u_id . ";");
            $this->u_forename = $temp;
            mysqli_close($conn);
        } else {
            throw new Exception("Invalid forename!");
        }
    }

    public function inter_u_pwd($pwd)
    {
        if ($pwd != null && strlen($pwd) >= 8) {
            $conn = establishDB();
            $temp = hash("sha384", $pwd, FALSE);
            $queryUpdate = mysqli_query($conn, "UPDATE u_users SET u_pwd = '$temp' WHERE u_id LIKE " . $this->u_id . ";");
            mysqli_close($conn);
        } else {
            throw new Exception("Passwort muss mindestens 8 Zeichen enthalten!");
        }
    }

    public function inter_u_zip($zipcode)
    {
        if (strlen($zipcode) > 2 && strlen($zipcode) < 11) {
            $conn = establishDB();
            $temp = mysqli_real_escape_string($conn, $zipcode);
            $queryUpdate = mysqli_query($conn, "UPDATE u_users SET u_zipcode = '$temp' WHERE u_id LIKE " . $this->u_id . ";");
            $this->u_zipcode = $temp;
            mysqli_close($conn);
        } else {
            throw new Exception("Invalid zipcode!");
        }
    }

    public function inter_u_image($image)
    {
        $this->u_image = $image;
    }

    public function inter_u_phonenr($phonenr)
    {
        if (strlen($phonenr) > 3 && strlen($phonenr) < 20) {
            $conn = establishDB();
            $temp = mysqli_real_escape_string($conn, $phonenr);
            $queryUpdate = mysqli_query($conn, "UPDATE u_users SET u_phonenumber = '$temp' WHERE u_id LIKE " . $this->u_id . ";");
            $this->u_phonenumber = $temp;
            mysqli_close($conn);
        } else {
            throw new Exception("Invalid phonenumber!");
        }
    }

    public function inter_u_description($description)
    {
        $conn = establishDB();
        $temp = mysqli_real_escape_string($conn, $description);
        $queryUpdate = mysqli_query($conn, "UPDATE u_users SET u_description = '$temp' WHERE u_id LIKE " . $this->u_id . ";");
        $this->u_description = $temp;
        mysqli_close($conn);
    }

    public function inter_u_birthday()
    {
        // TODO: Implement inter_u_birthday() method.
    }
}
?>