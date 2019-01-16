<?php
/**
 * Created by PhpStorm.
 * User: flori
 * Date: 15.01.2019
 * Time: 22:19
 */
require "funcs.inc.php";
error_reporting(0);
session_start();
checkSession();
$user_id = $_SESSION["u_user"]->u_id;
$post_id = $_POST['p_id'];
if(isset($post_id)){
    if(checkPostLiked($post_id) == false){
        mysqli_query(establishDB(), "INSERT INTO f_favorites (f_favorites.f_p_post, f_favorites.f_u_user) VALUES ($post_id,$user_id);");
    }
    else{
        mysqli_query(establishDB(),"DELETE FROM f_favorites WHERE f_u_user = ".$user_id." && f_p_post = ".$post_id.";");
    }
}
