<?php
header("Content-type: image/jpeg");

$imagen1 = imagecreatefromjpeg($_GET['im1']);
$imagen2 = imagecreatefromjpeg($_GET['im2']);

$x = intval(imagesx($imagen1)-imagesx($imagen2))/2;
$y = intval(imagesy($imagen1)-imagesy($imagen2))/2;

imagecopy($imagen1,$imagen2,$x,$y,0,0,151,87);

imagejpeg($imagen1);

imagedestroy($imagen2);
imagedestroy($imagen1);
?>