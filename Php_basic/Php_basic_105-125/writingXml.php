<?php
$arys = array(
"name"=>"hsl",
"age"=>21,
"some"=>"some"
);
$str="";
$str.="<coder>";
foreach($arys as $key=>$val){
    $str .="<".$key.">";
    $str.= $val;
    $str.="</".$key.">";
}
$str.="</coder>";
echo $str;    

$hand = fopen("hsl.xml","w");
fprintf($hand,"%s",$str);

