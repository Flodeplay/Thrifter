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
    public $p_description;
    public $p_createtime;
    public $p_u_user;
    public $p_col_color;
    public $p_b_brand;
    public $p_g_gender;
    public $p_con_condition;
    public $p_ca_category;
    public $p_s_size;
    public $p_location;

    /**
     * post constructor.
     * @param $p_id
     * @param $p_title
     * @param $p_price
     * @param $p_image
     * @param $p_description
     * @param $p_createtime
     * @param $p_u_user
     * @param $p_col_color
     * @param $p_b_brand
     * @param $p_g_gender
     * @param $p_con_condition
     * @param $p_ca_category
     * @param $p_s_size
     * @param $p_location
     */
    public function __construct($p_id, $p_title, $p_price, $p_image, $p_description, $p_createtime, $p_u_user, $p_col_color, $p_b_brand, $p_g_gender, $p_con_condition, $p_ca_category, $p_s_size, $p_location)
    {
        $this->setPId($p_id);
        $this->setPTitle($p_title);
        $this->setPPrice($p_price);
        $this->setPImage($p_image);
        $this->setPDescription($p_description);
        $this->setPCreatetime($p_createtime);
        $this->setPUUser($p_u_user);
        $this->setPColColor($p_col_color);
        $this->setPBBrand($p_b_brand);
        $this->setPGGender($p_g_gender);
        $this->setPConCondition($p_con_condition);
        $this->setPCaCategory($p_ca_category);
        $this->setPSSize($p_s_size);
        $this->setPLocation($p_location);
    }

    public function __toString()
    {
        $user = getUserbyID($this->p_u_user);
        $string = "<div class='product-outer col-12 col-sm-6 col-md-4 col-xl-3'><div class=\"product\">
                    <div class=\"product-head\">
                        <a href='viewuser.php?username=$user->u_username'</a>
                            <div class='product-head-inner'>
                                <img class='rounded-circle' src='../assets/users/$user->u_image'>
                                <div><span>$user->u_username</span><span>$user->u_zipcode</span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <a href='viewpost.php?post=$this->p_id'>
                    <img src=\"../assets/posts/$this->p_image\">
                    </a>
                    <div class=\"product-body\"><h5>$this->p_title</h5>";
        if (checkPostLiked($this->p_id) == true) {
            $string .= "<a onclick=\"postlike($this->p_id, 'dislike', this)\"><i class=\"fas fa-heart fa-2x text-danger\"></i></a></div>";
        } else {
            $string .= "<a onclick=\"postlike($this->p_id, 'like', this)\"><i class=\"fa-2x far fa-heart text-success\"></i></a></div>";
        }
        $string .= "<div class='product-footer'><h6>$this->p_price</h6></div></div></div>";
        return $string;
    }

    public function thriftit()
    {
        $user = getUserbyID($this->p_u_user);
        $string = "<div class=\"thrift-it\">
                        <img src=\"../assets/posts/1.png\">
                        <div class=\"thrift-it-footer\">
                            <div class=\"d-flex align-items-center justify-content-between\"><h4>$this->p_title</h4><h5>".$this->p_price."€</h5></div>
                            <div class=\"d-flex align-items-center justify-content-between\"><span>$user->u_username</span><span>$user->u_zipcode</span></div>
                        </div>
                        <div class=\"btn_container\">";
        $string .= "<div class=\"btnDislike\" onclick='postlike_thrifter($this->p_id)'>
                                <i class=\"fas fa-times fa-4x text-white-50\"></i>
                            </div>";
        $string .= "<div class=\"btnLike\" onclick='postlike_thrifter($this->p_id,true)'>
                                <i class=\"fas fa-check fa-4x text-white-50\"></i>
                            </div>";
        $string .= "</div></div>";
        return $string;
    }

    /**
     * @return string
     */
    public function __toString2()
    {
        return " " .
            $this->p_id . " " .
            $this->p_title . " " .
            $this->p_price . " " .
            $this->p_image . " " .
            $this->p_description . " " .
            $this->p_createtime . " " .
            $this->p_u_user . " " .
            $this->p_col_color . " " .
            $this->p_b_brand . " " .
            $this->p_g_gender . " " .
            $this->p_con_condition . " " .
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
    public function setPId($p_id)
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
    public function setPTitle($p_title)
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
    public function setPImage($p_image)
    {
        $this->p_image = $p_image;
    }

    /**
     * @return mixed
     */
    public function getPCreatetime()
    {
        return $this->p_createtime;
    }

    /**
     * @param mixed $p_createtime
     */
    public function setPCreatetime($p_createtime)
    {
        $this->p_createtime = $p_createtime;
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
    public function setPUUser($p_u_user)
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
    public function setPColColor($p_col_color)
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
    public function setPBBrand($p_b_brand)
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
    public function setPGGender($p_g_gender)
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
    public function setPCaCategory($p_ca_category)
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
    public function setPSSize($p_s_size)
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
    public function setPPrice($p_price)
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
    public function setPLocation($p_location)
    {
        $this->p_location = $p_location;
    }

    /**
     * @return mixed
     */
    public function getPDescription()
    {
        return $this->p_description;
    }

    /**
     * @param mixed $p_description
     */
    public function setPDescription($p_description)
    {
        $this->p_description = $p_description;
    }

    /**
     * @return mixed
     */
    public function getPConCondition()
    {
        return $this->p_con_condition;
    }

    /**
     * @param mixed $p_con_condition
     */
    public function setPConCondition($p_con_condition)
    {
        $this->p_con_condition = $p_con_condition;
    }

    /**
     * @return mixed
     */
    public function getPLiked()
    {
        return $this->p_liked;
    }

    /**
     * @param mixed $p_liked
     */
    public function setPLiked($p_liked)
    {
        $this->p_liked = $p_liked;
    }
}

?>