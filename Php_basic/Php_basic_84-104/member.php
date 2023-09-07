<?php
session_start();
if(!isset($_SESSION['username'])){
    header("Location:session.php");
}


include "links.php";
echo "<br>";
echo "member page";