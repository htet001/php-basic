<?php
function makeme($num){
    return $num + 2;
}
echo makeme(7);

echo "<br>";
function some(){
    echo "Hello";
}
$first = "ome";

$exist = function_exists($first);
if($exist){
   echo "Function Exists";
}else{
    echo "Function does not Exists";
}
?>