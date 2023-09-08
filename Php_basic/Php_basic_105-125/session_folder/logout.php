<?php

session_start();
//session_destroy();

$_SESSION['username']=$user;
$_SESSION['password']=$pass;

header('Location:session.php');

include "links.php";
echo "<br>";

echo"logout page";