<?php

$num = 30000000000;

echo $num;

echo "<br>";

echo number_format($num);
echo "<br>";

echo number_format($num,"4");//deciml
echo "<br>";

echo number_format($num,"4","_","-");