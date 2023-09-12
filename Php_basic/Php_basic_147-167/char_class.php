<?php

$var = "HELLO WORLD MYANMAR 01234567809";

$bol = preg_match("/[0-9]/",$var);
echo $bol ? "TRUE" : "FALSE";
echo "<br>";


$bol = preg_match("/[a-z]/",$var);
echo $bol ? "TRUE" : "FALSE";
echo "<br>";


$bol = preg_match("/^[a-z]/",$var);
echo $bol ? "TRUE" : "FALSE";
echo "<br>";


$bol = preg_match("/[^a-z]/",$var);
echo $bol ? "TRUE" : "FALSE";
echo "<br>";

$bol = preg_match("/[A-Z]/",$var);
echo $bol ? "TRUE" : "FALSE";

