<?php 
ob_start();
session_start();
$output = "";
if($_SERVER["REQUEST_METHOD"] == "POST"){
  if(!isset($_SESSION["randStr"])){
    $output = "Включите отображение картинок в настройках браузера";
  }
  else{
    if($_SESSION["randStr"] == strtolower($_POST["answer"])){
      header("Location:robo.php");
    }else{
      $output = "Ошибка.Повторите ввод :/";
    }
  }
}