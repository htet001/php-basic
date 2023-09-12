<?php
date_default_timezone_set('Asia/Yangon');
$ary = getdate();
echo "<pre>".print_r($ary,true)."</pre>";

$date = date('a',time());//am |pm
echo $date . "<br>";

$date = date('A',time());//AM | PM
echo $date . "<br>";

$date = date('d',time());//day 0-
echo $date . "<br>";

$date = date('D',time());//day name three letters
echo $date . "<br>";

$date = date('F',time());//month name
echo $date . "<br>";

$date = date('h',time());//12hour format leading zero
echo $date . "<br>";

$date = date('H',time());//24hour formar leafing zero
echo $date . "<br>";

$date = date('g',time());//12hour format no zero
echo $date . "<br>";

$date = date('G',time());//24hour format no zero
echo $date . "<br>";

$date = date('i',time());//minutes
echo $date . "<br>";

$date = date('d/m/y g:m:s',time());
echo $date . "<br>";

$date = date('j',time());//day of month no zero
echo $date . "<br>";

$date = date('l',time());
echo $date . "<br>";

$date = date('L',time());//leaper year
echo $date . "<br>";

$date = date('m',time());
echo $date . "<br>";

$date = date('M',time());
echo $date . "<br>";

$date = date('r',time());
echo $date . "<br>";

$date = date('n',time());
echo $date . "<br>";

$date = date('s',time());
echo $date . "<br>";

$date = date('U',time());
echo $date . "<br>";

$date = date('y',time());
echo $date . "<br>";

$date = date('Y',time());
echo $date . "<br>";

$date = date('z',time());
echo $date . "<br>";

$date = date('Z',time());
echo $date . "<br>";