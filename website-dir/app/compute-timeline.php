<?php
/**
 * Created by PhpStorm.
 * User: flori
 * Date: 09.01.2019
 * Time: 12:07
 */
error_reporting(0);
require_once "funcs.inc.php";
session_start();
if(isset($_REQUEST["count"])){
    $count = $_REQUEST["count"];
}else{$count = 5;}
$query = mysqli_query(establishDB(), "SELECT * FROM p_post left join f_favorites f2 on p_post.p_id = f2.f_p_post WHERE f_p_post Is NULL && p_u_user != ".$_SESSION["u_user"]->u_id." LIMIT ".$count.";");
if (mysqli_num_rows($query) > 0) {
    while ($row = mysqli_fetch_assoc($query)) {
        $posts = new post($row["p_id"], $row["p_title"], $row["p_price"], $row["p_image"], $row["p_description"], $row["p_createtime"], $row["p_u_user"], $row["p_col_color"], $row["p_b_brand"], $row["p_g_gender"], $row["p_con_condition"], $row["p_ca_category"], ($row["p_s_size_value"] . " (" . $row["p_s_size_type"] . ")"), $row["u_zipcode"]);
        if(isset($_REQUEST["method"]) && $_REQUEST["method"] == "thrift-it"){
            echo $posts->thriftit();
        }
        else{
            echo $posts->__toString();
        }

    }
} else {
    if(isset($_REQUEST["method"]) && $_REQUEST["method"] == "thrift-it"){
        echo "<div class=\"thrift-it d-flex justify-content-center align-items-center flex-column p-3\"><h2 class='text-danger'>Keine Produkte Mehr Vorhanden!</h2><h4 class='text-success'> Schaue später noch einmal vorbei :)</h4></div>";
    }else{
        echo "<div class='product-outer col-12 col-sm-6 col-md-4 col-xl-3'><div class=\"product p-3\"><h2 class='text-danger'>Keine Produkte Mehr Vorhanden!</h2><h4 class='text-success'> Schaue später noch einmal vorbei :)</h4></div></div>";
    }
}
