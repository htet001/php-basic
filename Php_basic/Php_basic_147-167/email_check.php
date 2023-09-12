<?php

// $str = "htetshinelinn@gamil.com";

// $ans = preg_match("/^[a-z]+@[a-z]+\.[a-z]{3}$/",$str);

// echo $ans ? "Email is correct" : "Email is wrong";


// echo "<hr>";

// $str = "htetshinelinn@gamil.com2033";
// $ans = preg_replace("/[[:digit:]]+/","2023",$str);
// echo $ans;

// echo "<hr>";

$str = "Biology is the study of living things";
$ans = preg_replace(
    array("/biology/i","/study/"),
    array('BIO','learning'),
    $str
);
echo "<pre>".print_r($ans,true)."</pre>";