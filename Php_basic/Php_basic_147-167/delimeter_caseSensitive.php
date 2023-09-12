<?php

$var = "HELLO WORLD MYANMAR";

$bol = preg_match("/WO/",$var);
$bol = preg_match("+WO+",$var);
$bol = preg_match("#WO#",$var);
$bol = preg_match("!WO!",$var);
$bol = preg_match("%WO%",$var);

$bol = preg_match("/wo/i",$var);//case sensitive


echo $bol ? "TRUE" : "FALSE";