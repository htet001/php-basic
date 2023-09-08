<?php
$str ="Hello, They are very nice and the important is main";
echo str_word_count($str);
echo "<br>";
echo substr($str,10,strlen($str));
echo "<br>";
echo chunk_split($str,4,"-");