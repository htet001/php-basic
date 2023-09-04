<?php
$name = "mg";
$age = 29;

if($name == "mg" && $age <=18){
 echo "<b>You can vote</b>";
}else{
    echo "<b>You cannot vote</b>";
}

echo "<br>";
if($name == "mg" || $age <=18){
    echo "<b>You can vote</b>";
   }else{
       echo "<b>You cannot vote</b>";
   }

   // ! is not