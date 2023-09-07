<?php
$data = $_SERVER['QUERY_STRING'];
switch($data){
    case "home" :header("Location:home.php");break;
    case "about" :header("Location:about.php");break;
    default:
    echo"there is no file";
}