<?php
/**
 * Created by PhpStorm.
 * User: Manuel
 * Date: 16.01.2019
 * Time: 13:47
 */
$path = "../assets/users/1.jpg";
$src = imagecreatefromjpeg($path);
list($width, $height) = getimagesize($src);
$srcCrop = imagecreatetruecolor(500, 500);
$b = imagecopyresampled($srcCrop, $src, 0,0,$width/2-255,$height/2-255,500, 500, $width, $height);
$fileName="temp";
imagejpeg($srcCrop,"../assests/user/".$fileName.".jpg" );