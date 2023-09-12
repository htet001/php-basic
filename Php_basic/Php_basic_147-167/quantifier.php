<?php

$var = "hello 22 pop world myanarzz";

$bol = preg_match("/m+/",$var);
echo $bol ? "TRUE" : "FALSE";
echo "<br>";

$bol = preg_match("/z*/",$var);//zero or more
echo $bol ? "TRUE" : "FALSE";
echo "<br>";

$bol = preg_match("/z?/",$var);//zero or more
echo $bol ? "TRUE" : "FALSE";
echo "<br>";


$bol = preg_match("/z{5}/",$var);
echo $bol ? "TRUE" : "FALSE";
echo "<br>";


$bol = preg_match("/z{2,3}/",$var);//sequence
echo $bol ? "TRUE" : "FALSE";
echo "<br>";



$bol = preg_match("/z{2,}/",$var);//sequence
echo $bol ? "TRUE" : "FALSE";
echo "<br>";
echo "<hr>";

$bol = preg_match("/p.p/",$var);
echo $bol ? "TRUE" : "FALSE";
echo "<br>";

$bol = preg_match("/^.{2}$/",$var);
echo $bol ? "TRUE" : "FALSE";
echo "<br>";

$bol = preg_match("/<b>(.*)<\/b>/",$var);
echo $bol ? "TRUE" : "FALSE";
echo "<br>";

$bol = preg_match("/p(ph)/",$var);
echo $bol ? "TRUE" : "FALSE";
echo "<br>";

$bol = preg_match("/\d/",$var);// \D none digit
echo $bol ? "TRUE" : "FALSE";
echo "<br>";

$bol = preg_match("/\s/",$var);// \S none white space
echo $bol ? "TRUE" : "FALSE";
echo "<br>";

$bol = preg_match("/\w/",$var);// |W none word
echo $bol ? "TRUE" : "FALSE";
echo "<br>";

$bol = preg_match("/^$/",$var);
echo $bol ? "TRUE" : "FALSE";
echo "<br>";