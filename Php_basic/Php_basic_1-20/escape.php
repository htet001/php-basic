<?php
$str = "There is a \"bad Dog\" at the backyard";
echo $str;
$str01 = 'There is a \\bad Dog\\ at the backyard';
echo $str01;
$str02 = " \r There is a \$bad Dog at the backyard";
echo $str02;
$str03 = "There is a dog, \t he is very bad";
header ("Content-type:text/plain");
echo $str03;