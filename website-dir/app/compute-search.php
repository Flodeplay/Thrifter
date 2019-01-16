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
if(isset($_REQUEST["term"])){
    $term  = mysqli_real_escape_string(establishDB(),$_REQUEST["term"]);
    $query = mysqli_query(establishDB(), "SELECT * FROM p_post WHERE LOWER(p_title) LIKE '".strtolower($term)."%'");
    echo "<div class='my-3 font-weight-bold h5'>Produkte:</div>";
    if (mysqli_num_rows($query) > 0) {
        while($row = mysqli_fetch_assoc($query)){
            echo "<div class='card'><a href='viewpost.php?post=".$row["p_id"]."'><div class='card-body'><img style='max-height: 70px; width: auto' class='rounded-circle' src='../assets/posts/".$row["p_image"]."'><span class='pl-3'>".$row["p_title"]."</span></div></a></div>";
        }
    }
    else{
        echo "keine Produkte mit dem Namen vorhanden";
    }
    $query = mysqli_query(establishDB(), "SELECT * FROM u_users WHERE LOWER(u_username) LIKE '".strtolower($term)."%'");
    echo "<div class='my-3 font-weight-bold h5'>User:</div>";
    if (mysqli_num_rows($query) > 0) {
        while($row = mysqli_fetch_assoc($query)){
            echo "<div class='card'><a href='viewuser.php?username=".$row["u_username"]."'><div class='card-body'><img style='max-height: 70px; width: auto' class='rounded-circle' src='../assets/users/".$row["u_image"]."'><span class='pl-3'>".$row["u_username"]."</span></div></a></div>";
        }
    }
    else{
        echo "keine User mit dem Namen vorhanden";
    }
    $query = mysqli_query(establishDB(), "SELECT * FROM ca_categories WHERE LOWER(ca_name) LIKE '".strtolower($term)."%'");
    echo "<div class='my-3 font-weight-bold h5'>Kategorien:</div>";
    if (mysqli_num_rows($query) > 0) {
        while($row = mysqli_fetch_assoc($query)){
            echo "<div class='card'><a href='viewuser.php?username=".$row["ca_name"]."'><div class='card-body'><img style='max-height: 70px; width: auto' class='rounded-circle' src='../assets/users/".$row["ca_name"]."'><span class='pl-3'>".$row["ca_name"]."</span></div></a></div>";
        }
    }
    else{
        echo "keine User mit dem Namen vorhanden";
    }
}
else{
    echo "bitte einloggen!";
}