<?php
/**
 * Created by PhpStorm.
 * User: Manuel
 * Date: 16.01.2019
 * Time: 13:47
 */
$path = "../assets/users/1.jpg";
$src = imagecreatefromjpeg($path);
$thumb_width = 500;
$thumb_height = 500;

/*list($width, $height) = getimagesize($path);*/
/*$width = imagesx($src);
$height= imagesy($src);
$original_aspect = $width / $height;
$thumb_aspect = $thumb_width / $thumb_height;
if($original_aspect >= $thumb_aspect){
    $new_width = $thumb_width;
    $new_height = $width / ($height / $thumb_height);
}
else{
    $new_width = $thumb_width;
    $new_height = $height / ($width / $thumb_width );
}
$srcCrop = imagecreatetruecolor($thumb_width, $thumb_height);
$b = imagecopyresampled($srcCrop, $src, 0 - ($new_width - $thumb_width) / 2,0 - ($new_height - $thumb_height) / 2,0,0,$new_width, $new_height, $width, $height);
$fileName="temp";

imagejpeg($srcCrop,"../assets/users/".$fileName.".jpg",80 );
*/
$im = imagecreatefromjpeg($path);
$size = min(imagesx($im), imagesy($im));
$im2 = imagecrop($im, ['x' => $size[1], 'y' => ($size[1]-$size[0]*(9/16))/2, 'width' => $size[1], 'height' => $size[0]*(9/16)]);
imagejpeg($im2, '../assets/users/example-cropped.png');