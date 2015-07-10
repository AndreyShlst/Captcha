<?php
session_start();//В сессии будем хранить ответ капчи
$img = imagecreatefromjpeg("images/noise.jpg");
$color = imagecolorallocate($img, 64, 64, 64);
imageantialias($img, true);//Сглаживание
$nChars = 5;//Количество символов капчи
$randStr = substr(md5(uniqid()),0,$nChars);
$_SESSION["randStr"] = $randStr;//Записываем значение капчи в сессию

//Начальные координаты
$x = 20; 
$y = 30;
$deltaX = 40;//Смещение по Х

for($i=0;$i<$nChars;$i++){
	$size = rand(16,30);//Размер шрифта
	$angle = -30 + rand(0,60);
	imagettftext($img, $size, $angle, $x, $y, $color, "fonts/bellb.ttf", $randStr{$i});
	$x+= $deltaX;
}

header("Content-Type: image/jpg");
imagejpeg($img);