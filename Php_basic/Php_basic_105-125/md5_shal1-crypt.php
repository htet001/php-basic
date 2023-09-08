<?php
$pass = "123456";
$pass = md5($pass,true);
echo $pass;
echo "<br>";

$pass = sha1($pass,true);
echo $pass;
echo "<br>";

$pass = crypt($pass,$pass);
echo $pass;

echo "<br>";
echo "<br>";
echo "<br>";

$name = "htetshinelinn";
$name1 = md5($name);
$name2 = sha1($name1);
$name3 = crypt($name2,$name2);
echo $name3;