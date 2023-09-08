<?php
$str = "YOU are very important person very";


//case sensitive
echo strpos($str,"very");
echo "<br>";
echo strrpos($str,"very");
echo "<br>";

//Case does not sensitive
echo stripos($str,"Very");
echo "<br>";
echo strripos($str,"Very");

