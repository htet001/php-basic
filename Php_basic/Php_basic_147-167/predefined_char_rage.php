<?php

$str ="There is a bool";

$ans = preg_replace('/[[:alpha:]]/',"no",$str);

echo $ans;

echo"<br>";

$str1 ="There is 1234 bool";

$ans1 = preg_replace('/[[:digit:]]/',"#",$str1);

echo $ans1;


echo"<br>";

$str2 ="There *$@ is 1234 bool";

$ans2 = preg_replace('/[[:alnum:]]/',"#",$str2);

echo $ans2;


echo"<br>";

$str3 ="There is 1234 bool";

$ans3 = preg_replace('/[[:space:]]/',"#",$str3);

echo $ans3;



echo"<br>";

$str3 ="There is 1234 bool";

$ans3 = preg_replace('/[[:space:]]/',"",$str3);
$str = preg_match('/\s/',$ans3);
echo $str ? "True":"False";

