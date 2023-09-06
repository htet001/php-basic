<?php
function where(){
    echo " I am a doctor <br>";
    $x=10;
    $y=40;
    $result = $x+$y;
    echo $result;
}
where();
 echo "<br>";
function done($num){
    echo $num;
}

done(10000000000);

echo "<br>";


function mypro($num1 , $num2){
    echo $num1 + $num2;
}
mypro(100 , 200);

echo "<br>";

function mytime($num1 = 40000){
    echo $num1;
}
mytime();// if the value set below answer function,,this value is main
?>