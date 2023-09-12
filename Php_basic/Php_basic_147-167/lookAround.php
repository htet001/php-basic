<?php

$str ="ABC";

$rel = preg_match("/A(?=B)/",$str);//positive look ahead
echo $rel ? "TRUE" : "FALSE";

echo "<hr>";

$rel = preg_match("/(?<=B)C/",$str);//positive look behind
echo $rel ? "TRUE" : "FALSE";
echo "<hr>";

$rel = preg_match("/A(?!B)/",$str);//negative look ahead
echo $rel ? "TRUE" : "FALSE";
echo "<hr>";

$rel = preg_match("/(?<!B)C/",$str);//negative look behind
echo $rel ? "TRUE" : "FALSE";

echo "<hr>";
$password = "htet223_LINN";
$bol = preg_match("/(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*(_))/",$password);
echo $bol ? "Password is correct": "Password is wrong";