<?php

function createfile ( $customer) {
    $h = fopen($customer,mode:'w');
    fclose($h);
}
createfile('custom.txt');

function writefile($cook,$data){
    $h = fopen($cook,mode:'w');
    fwrite($h,$data);
    fclose($h);
}
writefile('custom.txt',"very nice");

function appendfile($cook,$data){
    $h = fopen($cook,'a');
    fwrite($h,$data);
    fclose($h);
}
appendfile('custom.txt',"good job");

function readmyfile($cook){
    $h = fopen($cook,mode:'r');
    $size = filesize($cook);
    $data = fread($h,$size);
    fclose($h);
    return $data;
}
 echo readmyfile('custom.txt');
?>