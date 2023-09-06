<?php
 
function myproject(){
    STATIC $num = 0;
    $num++;
    echo $num;

}
myproject();
echo "<br>";
myproject();
echo "<br>";
myproject();
echo "<br>";
myproject();
echo "<br>";
myproject();
echo "<br>";


$a =20;
//$b=$a;
$b = &$a;// & can change both value
$a= 30;

echo "value of a is " . $a;
echo "<br>";
echo "value of b is " . $b;

Echo "<br>";
$age = 20;
function myage($age){
    $age = 60;
    echo $age;
}
myage($age);
echo "<br>";
echo $age;
?>