<?php

$str = "There is $30 in my pocket!";
echo $str;

echo "<hr>";

$rel = preg_quote($str,'0');
echo $rel;