<?php
$num = 300000;
$city = "Yangon";
$val = 50.7;

printf("There are %u people in %s . Float value %f",$num,$city,$val);

$file = "testing.txt";
$hand = fopen($file,"w");
fprintf($hand,"There are %u people in %s . Float value %f",$num,$city,$val);