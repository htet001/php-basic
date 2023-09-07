<?php
$var = rand();
echo "rand====>".$var;
echo"<br>";
$max = getrandmax();
echo "max====>".$max ;


echo"<br>";

$num =  rand(1,6);
echo "between====>".$num;

echo"<br>";

$mytime= microtime();
echo  "microtime====>".$mytime;

echo"<br>";

echo mt_rand();
echo"<br>";


 srand(microtime() * 10000);
 echo rand();

 
