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
$query = mysqli_query(establishDB(), "SELECT * FROM p_post LIMIT 10");
if (mysqli_num_rows($query) > 0) {
    while ($row = mysqli_fetch_assoc($query)) {
        $posts = new post($row["p_id"], $row["p_title"], $row["p_price"], $row["p_image"], $row["p_description"], $row["p_createtime"], $row["p_u_user"], $row["p_col_color"], $row["p_b_brand"], $row["p_g_gender"], $row["p_con_condition"], $row["p_ca_category"], ($row["p_s_size_value"] . " (" . $row["p_s_size_type"] . ")"), $row["u_zipcode"]);
        echo $posts->timeline_post();
    }
} else {
    echo "Keine Produke vorhanden";
}
