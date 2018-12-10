<?php
/**
 * Created by PhpStorm.
 * user: flori
 * Date: 24.11.2018
 * Time: 21:42
 */


class user
{
    public $u_id;
    public $u_username;
    public $u_forename;
    public $u_surname;
    public $u_email;
    public $u_birthdate;
    public $u_createtime;
    public $u_description;
    public $u_image;
    public $u_phonenumber;
    public $u_zipcode;

    function __construct($u_id, $u_username, $u_forename, $u_surname, $u_email, $u_birthdate, $u_createtime, $u_description, $u_image, $u_phonenumber, $u_zipcode)
    {
        $this->u_id = $u_id;
        $this->u_username = $u_username;
        $this->u_forename = $u_forename;
        $this->u_surname = $u_surname;
        $this->u_email = $u_email;
        $this->u_birthdate = $u_birthdate;
        $this->u_createtime = $u_createtime;
        $this->u_description = $u_description;
        $this->u_image = $u_image;
        $this->u_phonenumber = $u_phonenumber;
        $this->u_zipcode = $u_zipcode;
    }

    /*
 * Gibt die Wishlist eines Users zurück user
 *@param anzahl der favourites die zurück gegeben werden soll, standart 10
 *@Exception wirft eine Exception falls die conn nicht established werden konnte
 *@author: florian
 *@Date 10.12.2018
 */
    function getWishlist($count = 10)
    {
        $query = mysqli_query(establishDB(), "SELECT * FROM f_favorites INNER JOIN p_post  on f_favorites.f_p_post = p_post.p_id INNER JOIN u_users on f_favorites.f_u_user = u_users.u_id WHERE u_id = " .$this->u_id ." LIMIT " .$count .";");
        if (mysqli_num_rows($query) > 0) {
            while ($row = mysqli_fetch_assoc($query)) {
                printProduct($row);
            }
        } else {
            return false;
        }
    }

    function reg_Email($email)
    {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $conn = establishDB();
            $queryUpdate = mysqli_query($conn, "UPDATE u_users SET u_email = '$email' WHERE u_id LIKE " . $this->u_id . ";");

        } else {
            throw new Exception("Invalid email!");
        }
    }

    function reg_Pwd($pwd)
    {

    }

    function reg_Surname($surname)
    {

    }

    function reg_Forename($forename)
    {

    }

    function reg_Birthdate($birthdate)
    {

    }

    function reg_Zipcode($zipcode)
    {

    }

    function reg_Image($image)
    {

    }

    function reg_Phonenumber($phonenr)
    {

    }

    function reg_Description($description)
    {

    }

    function __toString()
    {
        return $this->u_id;
    }
}
