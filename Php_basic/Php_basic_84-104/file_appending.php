<?php
$file = "mytest.txt";//file path
$handler = fopen($file,'a');//file open(file,mode)
fwrite($handler, "This is a very important code");
fclose($handler);

// "write" nae yay p thar file ko  htat "append" add
?> 