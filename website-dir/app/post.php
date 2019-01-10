<?php
/**
 * Created by PhpStorm.
 * User: flori
 * Date: 09.01.2019
 * Time: 12:08
 */

class post
{
    public $p_id;
    public $p_title;
    public $p_price;
    public $p_image;
    public $p_creattime;
    public $p_u_user;
    public $p_col_color;
    public $p_b_brand;
    public $p_g_gender;
    public $p_ca_category;
    public $p_s_size;
    public $p_location;

    /**
     * post constructor.
     * @param $p_id
     * @param $p_title
     * @param $p_price
     * @param $p_image
     * @param $p_creattime
     * @param $p_u_user
     * @param $p_col_color
     * @param $p_b_brand
     * @param $p_g_gender
     * @param $p_ca_category
     * @param $p_s_size
     * @param $p_location
     */
    public function __construct($p_id, $p_title, $p_price, $p_image, $p_creattime, $p_u_user, $p_col_color, $p_b_brand, $p_g_gender, $p_ca_category, $p_s_size, $p_location)
    {
        $this->p_id = $p_id;
        $this->p_title = $p_title;
        $this->p_price = $p_price;
        $this->p_image = $p_image;
        $this->p_creattime = $p_creattime;
        $this->p_u_user = $p_u_user;
        $this->p_col_color = $p_col_color;
        $this->p_b_brand = $p_b_brand;
        $this->p_g_gender = $p_g_gender;
        $this->p_ca_category = $p_ca_category;
        $this->p_s_size = $p_s_size;
        $this->p_location = $p_location;
    }

    public function __toString()
    {
        return  "<div class=\"product-outer col-12 col-sm-6 col-md-4 col-xl-3\">
                        <div class=\"card product\">
                            <div class=\"card-img-top\">
                                <img src=\"../assets/posts/". $this->p_image. "\" class=\"img-fluid card-img-top \">
                            </div>
                                <div class=\"card-body\">
                                    <div class=\"row justify-content-between align-items-center\">
                                        <div class=\"h2\" class=\"product-name\">" . $this->p_title . "</div>
                                        <div class=\"h5\" class=\"product-name\">" . $this->p_price . "€</div>
                                    </div>
                                    <div class=\"row justify-content-between align-items-center\">
                                        <div class=\"h5 product-user\">" . $this->p_u_user . "</div>
                                        <div class=\"product-loc\">" . $this->p_location . "</div>
                                    </div>
                                </div>
                        </div>
                        </div>";
    }
    public function __toString2(){
        return  $this->p_id . " " .
     $this->p_title . " " .
     $this->p_price . " " .
     $this->p_image . " " .
     $this->p_creattime . " " .
     $this->p_u_user . " " .
     $this->p_col_color . " " .
     $this->p_b_brand . " " .
     $this->p_g_gender . " " .
     $this->p_ca_category . " " .
     $this->p_s_size . " " .
     $this->p_location;
    }

    /**
     * @return mixed
     */
    public function getPId()
    {
        return $this->p_id;
    }

    /**
     * @param mixed $p_id
     */
    public function setPId($p_id): void
    {
        $this->p_id = $p_id;
    }

    /**
     * @return mixed
     */
    public function getPTitle()
    {
        return $this->p_title;
    }

    /**
     * @param mixed $p_title
     */
    public function setPTitle($p_title): void
    {
        $this->p_title = $p_title;
    }

    /**
     * @return mixed
     */
    public function getPImage()
    {
        return $this->p_image;
    }

    /**
     * @param mixed $p_image
     */
    public function setPImage($p_image): void
    {
        $this->p_image = $p_image;
    }

    /**
     * @return mixed
     */
    public function getPCreattime()
    {
        return $this->p_creattime;
    }

    /**
     * @param mixed $p_creattime
     */
    public function setPCreattime($p_creattime): void
    {
        $this->p_creattime = $p_creattime;
    }

    /**
     * @return mixed
     */
    public function getPUUser()
    {
        return $this->p_u_user;
    }

    /**
     * @param mixed $p_u_user
     */
    public function setPUUser($p_u_user): void
    {
        $this->p_u_user = $p_u_user;
    }

    /**
     * @return mixed
     */
    public function getPColColor()
    {
        return $this->p_col_color;
    }

    /**
     * @param mixed $p_col_color
     */
    public function setPColColor($p_col_color): void
    {
        $this->p_col_color = $p_col_color;
    }

    /**
     * @return mixed
     */
    public function getPBBrand()
    {
        return $this->p_b_brand;
    }

    /**
     * @param mixed $p_b_brand
     */
    public function setPBBrand($p_b_brand): void
    {
        $this->p_b_brand = $p_b_brand;
    }

    /**
     * @return mixed
     */
    public function getPGGender()
    {
        return $this->p_g_gender;
    }

    /**
     * @param mixed $p_g_gender
     */
    public function setPGGender($p_g_gender): void
    {
        $this->p_g_gender = $p_g_gender;
    }

    /**
     * @return mixed
     */
    public function getPCaCategory()
    {
        return $this->p_ca_category;
    }

    /**
     * @param mixed $p_ca_category
     */
    public function setPCaCategory($p_ca_category): void
    {
        $this->p_ca_category = $p_ca_category;
    }

    /**
     * @return mixed
     */
    public function getPSSize()
    {
        return $this->p_s_size;
    }

    /**
     * @param mixed $p_s_size
     */
    public function setPSSize($p_s_size): void
    {
        $this->p_s_size = $p_s_size;
    }

    /**
     * @return mixed
     */
    public function getPPrice()
    {
        return $this->p_price;
    }

    /**
     * @param mixed $p_price
     */
    public function setPPrice($p_price): void
    {
        $this->p_price = $p_price;
    }

    /**
     * @return mixed
     */
    public function getPLocation()
    {
        return $this->p_location;
    }

    /**
     * @param mixed $p_location
     */
    public function setPLocation($p_location): void
    {
        $this->p_location = $p_location;
    }


}