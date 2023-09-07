<?php

// function readmyfile($cook){
//     if(file_exists($cook)){
//         $h = fopen($cook,mode:'r');
//         $size = filesize($cook);
//         $data = fread($h,$size);
//         fclose($h);
//         return $data;
//     }
//     else{
//         echo "File does not exists";
//     }
// }
//  echo readmyfile('nothing.txt');


 function readmyfile($filename){
    $data = file_get_contents($filename);
    return $data;
 }
 echo readmyfile('mytest.txt');

//this is another way of "READ  FILE   "
?>