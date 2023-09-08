<?php
// $arys = array(
// "name"=>"hsl",
// "age"=>21,
// "some"=>"some"
// );
// echo json_encode($arys);

$file = "encode.json";
$hand = fopen($file,"r");
$json = fread($hand,filesize($file));
$ary= json_decode($json);

foreach($ary as $key=>$val){
    echo "Key is ".$key." and value is ". $val."<br>";
}