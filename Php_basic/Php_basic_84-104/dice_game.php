<?php
$s1 = rand(1,6);
$s2 = rand(1,6);

if($s1>$s2){
    echo"Your value is".$s1."<br>";
    echo"Oppoent value is".$s2."<br>";
    echo "YOU WIN!!!!!";
}elseif($s1==$s2){
    echo"Your value is".$s1."<br>";
    echo"Oppoent value is".$s2."<br>";
    echo"Draw!!!!";
}else{
    echo"Your value is".$s1."<br>";
    echo"Oppoent value is".$s2."<br>";
    echo"YOU LOSE!!!!!";
}


echo"<br>";

$p1=0;
$p2=0;
$s=0;
for($i=0;$i<100;$i++){
    $s1 = rand(1,6);
$s2 = rand(1,6);
    if($s1>$s2){
        $p1++;
    }elseif($s1==$s2){
        $s++;
    }else{
        $p2++;
    }
}

echo "You win ".$p1." times!!!<br>";
echo "Draw ".$s." times!!!<br>";
echo "You lose ".$p2." times!!!<br>";
?>