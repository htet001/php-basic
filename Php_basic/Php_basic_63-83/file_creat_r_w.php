<?php
// $file = "myproject.txt";
// $handler = fopen($file,'w');

// $file = "myproject.txt";//file path
// $handler = fopen($file,'r');//file open(file,mode)
// $size = filesize($file);
// $data = fread($handler,$size);
// echo $data;

$file = "myproject.txt";//file path
$handler = fopen($file,'w');//file open(file,mode)
fwrite($handler, "Maymyanmarlin");
fclose($handler);



?>