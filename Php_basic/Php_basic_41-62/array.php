<?php
$name = array();
$name[0] = "Myanmar";
$name[1] = "English";
$name[2] = "Maths";
$name[3] = "Chemistry";
echo $name[2];
echo "<br>";
$country = array("USA","Thailand","America","Russia");
echo $country[2];
echo "<br>";

echo count($country);
echo "<br>";
//associated array
$day = array();
$day["sunday"] = "Yangon";
$day["monday"] = "Mandalay";
$day["tuesday"]= "Naypyitaw";
echo $day["monday"];

echo "<br>";
$ary = array(
    //"key"=>"value",
    "one"=>"toyota",
    "two"=>"vigo",
    "three"=>"prado"
);
echo $ary["two"];
echo "<br>";

//multidimensional array

$bigArray = array(
    array("one", "two","three","four"),
    array(1,2,3),
    array("ichi","ni")
);
echo $bigArray[0][2];
echo "<br>";

$name1 = array("HSL","KSN","HMA","PHT");
//for($i=0;$i<count($name1);$i++){
//    echo $name1[$i]."<br>";
//}


/*$i=0;
while($i<count($name1)){
    echo  $name1[$i] . "<br>";
    $i++;
}*/
$i=0;
do{
    echo $name1[$i] . "<br>";
    $i++;
}while($i<count($name1));


$bigArray1 = array(
    array("one", "two","three","four"),
    array(1,2,3),
    array("ichi","ni")
);
for( $i = 0; $i < count($bigArray1); $i++){
    for( $j = 0; $j < count( $bigArray1[$i] ); $j++){
        echo $bigArray1[$i][$j] ."  ";
        
    }
    echo "<hr>";
}
echo"<br>";

$ary1 = array(
    //"key"=>"value",
    "one"=>"toyota",
    "two"=>"vigo",
    "three"=>"prado"
);
foreach($ary1 as $number=>$car){
 echo $number . "=>" .$car . "<br>";
}
?>